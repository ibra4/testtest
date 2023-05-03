items=("attention_devided_correct" "attention_devided_incorrect" "attention_sustained_error" "confidence_interval" "confidence_interval_nonverbal_memory" "confidence_interval_processing_speed" "difference_score_memory" "examiner_rating_attention" "examiner_rating_emotions" "examiner_rating_energy" "examiner_rating_organization" "examiner_rating_social" "finalData" "growth_scale_age_equivalents_cognitive_growth_scale" "growth_scale_age_equivalents_memory_growth_scale" "memory_and_processing_speed_composites" "nonverbal_iq" "percentile_ranks_scaled_scores" "score_diff_vs" "sem_growth_classification_analogieis" "sem_growth_figure_ground" "sem_growth_form_completion" "sem_growth_forward_memory" "sem_growth_nonverbal_iq" "sem_growth_nonverbal_memory" "sem_growth_reverse_memory" "sem_growth_sequential_order" "sem_growth_visual_patterns")

for item in "${items[@]}"
    do
        # Run the command for each item
        echo "Running command for $item"
        # Replace the following line with your desired command
        # For example: 
        # command_to_run "$item"
done