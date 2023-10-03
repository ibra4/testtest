import csv

with open('age_equ.csv', 'r') as csvfile:
    csvreader = csv.reader(csvfile)
    
    header = next(csvreader)

    
    for index, row in enumerate(csvreader):
        processing_index = 1
        for value in row:
            if processing_index >= len(row):
                continue
            test_age = row[0]
            current_value = row[processing_index]
            if current_value == '':
                continue
            if '-' in current_value:
                ss = current_value.split('-')
                print('arr', ss)
            else:
                print('num', current_value)
            processing_index += 1
        print("*****************")

            # print(row[inner_index], "\t\t\t",row[inner_index].find('-'))
        # print(index, row)
    #     if index == 0:
    #         header = row
    #         continue
    #     # if number is n-m then i need to loop over all numbers between n and m
    #     # row[0] is the value
        
    #     print(index, row)