<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for programming courses
        $courses = [
            [
                'icon' => 'scratch.jpg',
                'title' => 'Creating Games with Scratch',
                'description' => 'Learn the basics of programming using Scratch, a visual programming language designed for kids.',
                'age' => '7-9',
                'price' => 15,
                'lessons' => 40,
                'reason' => 'Scratch helps kids develop logical thinking and problem-solving skills in a fun and interactive way.',
                'trial' => 'Creating your first animation, Understanding blocks and scripts',
                'Module_one' => 'Introduction to Scratch interface, Creating sprites and backdrops',
                'Module_two' => 'Basic animations, Using loops and conditionals',
                'expectation' => 'By the end of the course, students will be able to create their own interactive stories and games.',
            ],


            [
                'icon' => 'python.jpg',
                'title' => 'Python for Teens',
                'description' => 'A beginner-friendly course to learn Python programming, perfect for teens interested in coding.',
                'age' => '10-17',
                'price' => 15,
                'lessons' => 40,
                'reason' => 'Python is one of the most popular programming languages and is widely used in web development, data science, and automation.',
                'trial' => 'Writing your first Python program, Understanding variables and data types',
                'Module_one' => 'Introduction to Python, Working with strings and numbers',
                'Module_two' => 'Functions and loops, Introduction to libraries',
                'expectation' => 'Students will gain a solid foundation in Python and be able to build simple programs and scripts.',
            ],

            [
                'icon' => 'web.jpg',
                'title' => 'Web Design',
                'description' => 'Learn how to build design cool websites using HTML, CSS, and JavaScript in a fun and engaging way.',
                'age' => '11-18',
                'price' => 18,
                'lessons' => 40,
                'reason' => 'Web development is a valuable skill that encourages creativity and problem-solving.',
                'trial' => 'Creating your first webpage, Understanding HTML tags',
                'Module_one' => 'Introduction to HTML and CSS, Styling web pages',
                'Module_two' => 'Introduction to JavaScript, Adding interactivity to websites',
                'expectation' => 'Students will be able to create and publish their own websites.',
            ],

            [
                'icon' => 'unity.jpg',
                'title' => 'Unity 3D Game Development',
                'description' => 'Learn how to create immersive 3D games and interactive experiences using Unity, one of the most popular game development platforms.',
                'age' => '13-18',
                'price' => 20,
                'lessons' => 50,
                'reason' => 'Unity is a powerful tool used by professionals to create games, simulations, and virtual reality experiences. Learning Unity opens doors to careers in game development and interactive media.',
                'trial' => 'Introduction to Unity interface, Creating your first 3D scene',
                'Module_one' => 'Understanding Unity basics, Working with GameObjects and components',
                'Module_two' => 'Scripting with C#, Building game mechanics and interactions',
                'expectation' => 'By the end of the course, students will be able to design, build, and publish their own 3D games and interactive projects.',
            ],

            [
                'icon' => 'computer.jpg',
                'title' => 'Computer Literacy',
                'description' => 'Learn the basics of using computers, including file management, internet safety, and essential software tools like word processors.',
                'age' => '8-15',
                'price' => 15,
                'lessons' => 30,
                'reason' => 'Computer literacy is a foundational skill in today’s digital world. This course equips students with the knowledge to use computers effectively and safely.',
                'trial' => 'Introduction to computers, Understanding the desktop and file system',
                'Module_one' => 'Basic computer operations, Using word processors (e.g., Microsoft Word, Google Docs)',
                'Module_two' => 'Internet safety and browsing, Introduction to spreadsheets (e.g., Microsoft Excel, Google Sheets)',
                'expectation' => 'By the end of the course, students will be confident in using computers for schoolwork, online research, and basic productivity tasks.',
            ],

            [
                'icon' => 'snap.jpg',
                'title' => 'Snap Programming',
                'description' => 'Learn the basics of programming using Snap!, a visual programming language that makes coding fun and easy for beginners.',
                'age' => '8-14',
                'price' => 15,
                'lessons' => 25,
                'reason' => 'Snap! is a beginner-friendly way to learn programming concepts like loops, conditionals, and variables. It’s perfect for kids who want to explore coding in a creative way.',
                'trial' => 'Introduction to Snap! interface, Creating your first animation',
                'Module_one' => 'Understanding blocks and scripts, Creating interactive stories',
                'Module_two' => 'Using loops and conditionals, Building simple games',
                'expectation' => 'By the end of the course, students will be able to create their own interactive projects and games using Snap!.',
            ],

        ];


        /*
     
      [
          'title' => 'Game Development with Roblox',
          'description' => 'Learn how to create games using Roblox Studio and Lua programming.',
          'price' => 199.99,
          'duration' => '10 weeks',
          'reason' => 'Roblox is a popular platform that allows kids to create and share their own games.',
          'trial' => 'Introduction to Roblox Studio, Creating your first game',
          'Module_one' => 'Understanding Roblox Studio, Building game environments',
          'Module_two' => 'Introduction to Lua scripting, Adding game mechanics',
          'expectation' => 'Students will be able to design, build, and publish their own games on Roblox.',
      ],
      [
          'title' => 'Introduction to Robotics with LEGO Mindstorms',
          'description' => 'Learn the basics of robotics and programming using LEGO Mindstorms.',
          'price' => 179.99,
          'duration' => '8 weeks',
          'reason' => 'Robotics combines creativity, engineering, and programming, making it a great skill for kids and teens.',
          'trial' => 'Building your first robot, Introduction to sensors and motors',
          'Module_one' => 'Understanding LEGO Mindstorms, Building and programming robots',
          'Module_two' => 'Advanced robotics concepts, Creating autonomous robots',
          'expectation' => 'Students will gain hands-on experience in robotics and be able to build and program their own robots.',
      ],
  ];
  */

        // Insert data into the courses table
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}