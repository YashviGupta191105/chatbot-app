<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatbotResponse;

class ChatbotResponseSeeder extends Seeder
{
    public function run()
    {
        ChatbotResponse::create([
            'response' => 'Menopause is a natural biological process that signifies the end of a woman’s menstrual cycles and fertility. It typically occurs between ages 45 and 55, but can vary. It is diagnosed when a woman has not had a period for 12 consecutive months.',
            'keywords' => 'what is menopause, menopause definition, menopause age, when does menopause occur'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Hot flashes are one of the most common symptoms of menopause. They are sudden feelings of heat, often accompanied by sweating and a reddening of the skin. Hot flashes can vary in intensity and frequency, with some women experiencing them daily.',
            'keywords' => 'hot flashes, menopause hot flashes, hot flashes causes, what are hot flashes'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Night sweats are similar to hot flashes, but they occur during sleep and can cause significant discomfort. They can disrupt sleep, leaving women feeling fatigued and drained in the morning.',
            'keywords' => 'night sweats, menopause night sweats, sweating at night, sleep disruption'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Mood swings are another common symptom during menopause, caused by hormonal fluctuations. These can range from irritability and anxiety to feelings of sadness or even depression.',
            'keywords' => 'menopause mood swings, menopause depression, emotional symptoms of menopause, menopause anxiety'
        ]);
        
        ChatbotResponse::create([
            'response' => 'During menopause, many women experience changes in their menstrual cycle. Periods may become irregular, heavier, lighter, or more frequent before they stop altogether.',
            'keywords' => 'menstrual irregularities, menopause periods, menopause cycle changes, irregular periods'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Vaginal dryness is common due to the decrease in estrogen levels during menopause. This can lead to discomfort during intercourse and may also contribute to urinary tract infections.',
            'keywords' => 'vaginal dryness, menopause vaginal symptoms, estrogen decline, vaginal discomfort'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Hormone Replacement Therapy (HRT) is a common treatment for menopause symptoms. It involves taking estrogen (and sometimes progesterone) to relieve hot flashes, night sweats, and vaginal dryness. However, it comes with risks, including an increased risk of blood clots, stroke, and breast cancer in some women.',
            'keywords' => 'Hormone Replacement Therapy, HRT benefits, HRT risks, menopause treatment, estrogen therapy'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Non-hormonal treatments for menopause include antidepressants, blood pressure medications, and certain anti-seizure medications, which can help alleviate hot flashes and mood swings.',
            'keywords' => 'non-hormonal treatments, antidepressants for menopause, hot flashes treatment, menopause mood swing remedies'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Exercise, particularly weight-bearing exercises like walking or strength training, can help reduce menopause symptoms by boosting mood, improving sleep, and increasing bone density.',
            'keywords' => 'exercise for menopause, menopause physical activity, menopause symptoms management, weight-bearing exercises'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Dietary changes can also play a role in managing menopause. Consuming a balanced diet rich in fruits, vegetables, whole grains, and lean proteins can help regulate weight, reduce hot flashes, and support overall health.',
            'keywords' => 'diet for menopause, menopause healthy eating, menopause nutrition, foods to reduce hot flashes'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Some women experience cognitive changes during menopause, such as forgetfulness or difficulty concentrating. These changes may be linked to hormonal fluctuations, sleep disturbances, and stress.',
            'keywords' => 'menopause cognitive changes, menopause memory problems, menopause concentration issues'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Sleep disturbances are a major issue for many women during menopause. Insomnia and trouble falling asleep can result from hot flashes, night sweats, or anxiety. Practicing good sleep hygiene, such as maintaining a regular sleep schedule and avoiding caffeine, can help.',
            'keywords' => 'menopause sleep issues, menopause insomnia, hot flashes disrupting sleep, sleep hygiene'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Osteoporosis is a condition in which bones become weaker and more fragile. After menopause, women are at increased risk for osteoporosis due to the decrease in estrogen, which helps protect bones. Weight-bearing exercises and calcium and vitamin D supplements can help maintain bone health.',
            'keywords' => 'osteoporosis, menopause bone health, osteoporosis prevention, calcium for menopause'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Perimenopause refers to the transitional period leading up to menopause, where symptoms such as irregular periods, hot flashes, and mood swings begin to occur. It can last for several years before menopause fully occurs.',
            'keywords' => 'perimenopause, perimenopause symptoms, menopause transition, how long is perimenopause'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Postmenopause is the phase after a woman has gone through menopause. During this time, menopause symptoms typically subside, but women may still experience health changes related to hormonal shifts, including an increased risk for heart disease and osteoporosis.',
            'keywords' => 'postmenopause, postmenopause symptoms, life after menopause, menopause health risks'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Women may also experience changes in their sexual health during menopause, including reduced libido and vaginal dryness. Communication with a healthcare provider can help manage these symptoms effectively.',
            'keywords' => 'sexual health menopause, menopause libido, vaginal dryness treatment, menopause sexual symptoms'
        ]);
        
        ChatbotResponse::create([
            'response' => 'Many women find that stress management techniques, such as yoga, meditation, and mindfulness, can help cope with the emotional and physical symptoms of menopause, improving both mental and physical well-being.',
            'keywords' => 'stress management menopause, yoga for menopause, menopause meditation, mindfulness during menopause'
        ]);
        

        // Add more predefined responses as necessary
    }
}
