<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('questions')->insert([
            [
                'question_text' => 'How many planets are there in our solar system?',
                'answer_one' => 'Eight',
                'answer_two' => 'Nine',
                'answer_three' => 'Ten',
                'answer_four' => 'Eleven',
                "right_answer" => 'Eight',
                "quiz_id" => 1],
            [
                'question_text' => 'Which statement describes the atmosphere of the planet correctly?',
                'answer_one' => 'Venus is mostly carbon dioxide',
                'answer_two' => 'Mercury is mostly nitrogen',
                'answer_three' => 'Earth is mostly oxygen',
                'answer_four' => 'Saturn is mostly helium',
                "right_answer" => 'Venus is mostly carbon dioxide',
                "quiz_id" => 1],
            [
                'question_text' => 'To weigh roughly two-thirds less than what you do on Earth, which planet would you be on?',
                'answer_one' => 'Uranus',
                'answer_two' => 'Mars',
                'answer_three' => 'Jupiter',
                'answer_four' => 'Venus',
                "right_answer" => 'Mars',
                "quiz_id" => 1],
            [
                'question_text' => 'How long does it take for light from the Sun to reach Earth?',
                'answer_one' => '1 minute',
                'answer_two' => '8 minutes',
                'answer_three' => 'Instantaneous',
                'answer_four' => '24 hours',
                "right_answer" => '8 minutes',
                "quiz_id" => 1],
            [
                'question_text' => 'How old is the solar system?',
                'answer_one' => '5000 years',
                'answer_two' => '5 million years',
                'answer_three' => '5 billion years',
                'answer_four' => '500 billion years',
                "right_answer" => '5 billion years',
                "quiz_id" => 1],
            [
                'question_text' => 'What does HTML stand for?',
                'answer_one' => 'Hyper Text Preprocessor',
                'answer_two' => 'Hyper Text Markup Language',
                'answer_three' => 'Hyper Text Multiple Language',
                'answer_four' => 'Hyper Tool Multi Language',
                "right_answer" => 'Hyper Text Markup Language',
                "quiz_id" => 2],
            [
                'question_text' => 'What does CSS stand for?',
                'answer_one' => 'Common Style Sheet',
                'answer_two' => 'Colorful Style Sheet',
                'answer_three' => 'Computer Style Sheet',
                'answer_four' => 'Cascading Style Sheet',
                "right_answer" => 'Cascading Style Sheet',
                "quiz_id" => 2],
            [
                'question_text' => 'What does PHP stand for?',
                'answer_one' => 'Hypertext Preprocessor',
                'answer_two' => 'Hypertext Programming',
                'answer_three' => 'Hypertext Preprogramming',
                'answer_four' => 'Hometext Preprocessor',
                "right_answer" => 'Hypertext Preprocessor',
                "quiz_id" => 2],
            [
                'question_text' => 'What does SQL stand for?',
                'answer_one' => 'Stylish Question Language',
                'answer_two' => 'Stylesheet Query Language',
                'answer_three' => 'Statement Question Language',
                'answer_four' => 'Structured Query Language',
                "right_answer" => 'Structured Query Language',
                "quiz_id" => 2],
            [
                'question_text' => 'What does XML stand for?',
                'answer_one' => 'extensible Markup Language',
                'answer_two' => 'executable Multiple Language',
                'answer_three' => 'extra Multi-Program Language',
                'answer_four' => 'examine Multiple Language',
                "right_answer" => 'extensible Markup Language',
                "quiz_id" => 2],
            [
                'question_text' => 'What is the study of weather called?',
                'answer_one' => 'Meteorology',
                'answer_two' => 'Scientology',
                'answer_three' => 'nanoalogy',
                'answer_four' => 'computeralogy',
                "right_answer" => 'Meteorology',
                "quiz_id" => 3],
            [
                'question_text' => 'What is the main industry in the UK countryside?',
                'answer_one' => 'Transport industry',
                'answer_two' => 'Computer industry',
                'answer_three' => 'farming industry',
                'answer_four' => 'Education industry',
                "right_answer" => 'farming industry',
                "quiz_id" => 3],
            [
                'question_text' => 'why we use p Element?',
                'answer_one' => 'to make text bold',
                'answer_two' => 'to make text italic',
                'answer_three' => 'to use a paragraph',
                'answer_four' => 'to make horizontal line',
                "right_answer" => 'to use a paragraph',
                "quiz_id" => 3],
            [
                'question_text' => 'What is the highest point in France?',
                'answer_one' => 'Mount everest',
                'answer_two' => 'Mount Blanc',
                'answer_three' => 'Mount Jarash',
                'answer_four' => 'Mount Nipo',
                "right_answer" => 'Mount Blanc',
                "quiz_id" => 3],
            [
                'question_text' => 'When we have very little rain causing a water shortage what is this called?',
                'answer_one' => 'Drought',
                'answer_two' => 'Deserting',
                'answer_three' => 'No watring',
                'answer_four' => 'Washing',
                "right_answer" => 'Drought',
                "quiz_id" => 3],
            [
                'question_text' => 'The human eye weighs approximately?',
                'answer_one' => 'The ear',
                'answer_two' => 'The finger nail',
                'answer_three' => 'Human hair',
                'answer_four' => 'The cornea',
                "right_answer" => 'The cornea',
                "quiz_id" => 4],
            [
                'question_text' => 'How many approximate miles of capillaries does the human body have?',
                'answer_one' => 37,
                'answer_two' => 37.000,
                'answer_three' => '21 million',
                'answer_four' => 100,
                "right_answer" => 37.000,
                "quiz_id" => 4],
            [
                'question_text' => 'How many pounds of oxygen does the adult human body require daily?',
                'answer_one' => '88 pounds',
                'answer_two' => '44 pounds',
                'answer_three' => '34 pounds',
                'answer_four' => '14 pounds',
                "right_answer" => '88 pounds',
                "quiz_id" => 4],
            [
                'question_text' => 'Your brain is...?',
                'answer_one' => '7% Water',
                'answer_two' => '89% Water',
                'answer_three' => '25% Water',
                'answer_four' => '80% Water',
                "right_answer" => '80% Water',
                "quiz_id" => 4],
            [
                'question_text' => 'In which decade was the American Institute of Electrical Engineers (AIEE) founded?',
                'answer one' => '1850s',
                'answer two' => '1880s',
                'answer three' => '1930s',
                'answer four' => '1950s',
                "right_answer" => '1880s',
                "quiz_id" => 5],
            [
                'question_text' => 'What is part of a database that holds only one type of information ?',
                'answer one' => 'Report',
                'answer two' => 'Field',
                'answer three' => 'File',
                'answer four' => 'Record',
                "right_answer" => 'Field',
                "quiz_id" => 5],
            [
                'question_text' => 'In which decade with the first transatlantic radio broadcast occur ?',
                'answer one' => '1850s',
                'answer two' => '1860s',
                'answer three' => '1870s',
                'answer four' => '1900s',
                "right_answer" => '1900s',
                "quiz_id" => 5],
            [
                'question_text' => '"OS" computer abbreviation usually means ? ',
                'answer one' => 'Order of Significance',
                'answer two' => 'Open Software',
                'answer three' => 'Operating System',
                'answer four' => 'Optical Sensor',
                "right_answer" => 'Operating System',
                "quiz_id" => 5],
            [
                'question_text' => "'.MOV'extension refers usually to what kind of file ? ",
                'answer one' => 'Image file',
                'answer two' => 'Animation/movie file',
                'answer three' => 'Audio file',
                'answer four' => 'MS Office document',
                "right_answer" => 'Animation/movie file',
                "quiz_id" => 5],
        ]);
    }
}
