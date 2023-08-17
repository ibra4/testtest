<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationRequest;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Models\User;
use App\Models\UserNotification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actionIndex()
    {
        $notifications = Notification::paginate();
        return $this->sendSuccessReponse($notifications);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actionGet($id)
    {
        return $this->sendSuccessReponse(new NotificationResource(Notification::findOrFail($id)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NotificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function actionCreate(NotificationRequest $request)
    {
        $data = $request->all();
        $data['created_by'] = $request->user()->id;

        $notification = Notification::create($data);

        // @TODO: make a service
        switch ($notification->for) {
            case 'all':
                $userIds = User::all()->pluck('id')->toArray();
                break;
            case 'sub_admins':
                $userIds = User::where('role', 'sub_admin')->pluck('id')->toArray();
                break;
            case 'centers':
                $userIds = User::where('role', 'admin')->pluck('id')->toArray();
                break;
            default:
                $userIds = [];
        }

        $usersNotifications = array_map(function ($uid) use ($notification) {
            return [
                'user_id' => $uid,
                'notification_id' => $notification->id,
                'created_at' => now()
            ];
        }, $userIds);

        UserNotification::insert($usersNotifications);

        return $this->sendSuccessReponse($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NotificationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actionUpdate(NotificationRequest $request, $id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update($request->all());

        return $this->sendSuccessReponse($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actionDelete($id)
    {
        Notification::findOrFail($id)->delete();

        return $this->sendSuccessReponse();
    }
}
