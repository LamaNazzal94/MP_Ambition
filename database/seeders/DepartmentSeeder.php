<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */{
            $departmints = [
                [
                    'name' => 'Computer Engineering',
                    'image' => 'dep1.png',
                    'introduction' => "The College of Computer Engineering is an esteemed institution dedicated to providing a comprehensive education in the field of computer engineering. With a strong emphasis on merging hardware and software concepts, the college equips students with the skills and knowledge required to design, develop, and innovate cutting-edge computer systems and technologies. Through a blend of theoretical instruction and practical experience, the college's faculty, composed of experts in the field, guide students in mastering areas such as digital systems, computer architecture, embedded systems, and software engineering. State-of-the-art laboratories and research facilities offer students hands-on opportunities to explore real-world applications, fostering creativity and problem-solving abilities. Graduates from the College of Computer Engineering are prepared to excel in various industries, including electronics, telecommunications, robotics, and automation. With a strong foundation in both hardware and software, they become adept at tackling complex challenges and contributing to the advancement of technology in the modern world. ",
                    'apportunities' => 'Embedded Systems',
                    'apportunitie2' => 'Hardware Design',
                    'apportunitie3' => 'Network Engineering',
                    'apportunitie4' => 'Cybersecurity',
                    'apportunitie5' => 'College of Planning, Building and Environment',
                    'apportunitie6' => 'Data Science',
                    'apportunitie7' => 'Data analyses',

                    'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                    'duration_study' => 'The duration of studying computer engineering at Al-Hajjawi College ranges from 3 to 4 years.',
                    'college_id' => 1,
                ],
                [
                    'name' => ' Electrical  Engineering',
                    'image' => 'electrical.png',
                    'introduction' => "The College of Computer Engineering is an esteemed institution dedicated to providing a comprehensive education in the field of computer engineering. With a strong emphasis on merging hardware and software concepts, the college equips students with the skills and knowledge required to design, develop, and innovate cutting-edge computer systems and technologies. Through a blend of theoretical instruction and practical experience, the college's faculty, composed of experts in the field, guide students in mastering areas such as digital systems, computer architecture, embedded systems, and software engineering. State-of-the-art laboratories and research facilities offer students hands-on opportunities to explore real-world applications, fostering creativity and problem-solving abilities. Graduates from the College of Computer Engineering are prepared to excel in various industries, including electronics, telecommunications, robotics, and automation. With a strong foundation in both hardware and software, they become adept at tackling complex challenges and contributing to the advancement of technology in the modern world. ",
                    'apportunities' => 'Embedded Systems',
                    'apportunitie2' => 'Hardware Design',
                    'apportunitie3' => 'Network Engineering',
                    'apportunitie4' => 'Cybersecurity',
                    'apportunitie5' => 'College of Planning, Building and Environment',
                    'apportunitie6' => 'Data Science',
                    'apportunitie7' => 'Data analyses',

                    'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                    'duration_study' => 'The duration of studying computer engineering at Al-Hajjawi College ranges from 3 to 4 years.',
                    'college_id' => 1,
                ],
                [
                    'name' => ' Biomedical Engineering',
                    'image' => 'bio.png',
                    'introduction' => "The College of Computer Engineering is an esteemed institution dedicated to providing a comprehensive education in the field of computer engineering. With a strong emphasis on merging hardware and software concepts, the college equips students with the skills and knowledge required to design, develop, and innovate cutting-edge computer systems and technologies. Through a blend of theoretical instruction and practical experience, the college's faculty, composed of experts in the field, guide students in mastering areas such as digital systems, computer architecture, embedded systems, and software engineering. State-of-the-art laboratories and research facilities offer students hands-on opportunities to explore real-world applications, fostering creativity and problem-solving abilities. Graduates from the College of Computer Engineering are prepared to excel in various industries, including electronics, telecommunications, robotics, and automation. With a strong foundation in both hardware and software, they become adept at tackling complex challenges and contributing to the advancement of technology in the modern world. ",
                    'apportunities' => 'Embedded Systems',
                    'apportunitie2' => 'Hardware Design',
                    'apportunitie3' => 'Network Engineering',
                    'apportunitie4' => 'Cybersecurity',
                    'apportunitie5' => 'College of Planning, Building and Environment',
                    'apportunitie6' => 'Data Science',
                    'apportunitie7' => 'Data analyses',

                    'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                    'duration_study' => 'The duration of studying computer engineering at Al-Hajjawi College ranges from 3 to 4 years.',
                    'college_id' => 1,
                ],
                [
                    'name' => ' Mechanical Engineering',
                    'image' => 'mechanecal.png',
                    'introduction' => "The College of Computer Engineering is an esteemed institution dedicated to providing a comprehensive education in the field of computer engineering. With a strong emphasis on merging hardware and software concepts, the college equips students with the skills and knowledge required to design, develop, and innovate cutting-edge computer systems and technologies. Through a blend of theoretical instruction and practical experience, the college's faculty, composed of experts in the field, guide students in mastering areas such as digital systems, computer architecture, embedded systems, and software engineering. State-of-the-art laboratories and research facilities offer students hands-on opportunities to explore real-world applications, fostering creativity and problem-solving abilities. Graduates from the College of Computer Engineering are prepared to excel in various industries, including electronics, telecommunications, robotics, and automation. With a strong foundation in both hardware and software, they become adept at tackling complex challenges and contributing to the advancement of technology in the modern world. ",
                    'apportunities' => 'Embedded Systems',
                    'apportunitie2' => 'Hardware Design',
                    'apportunitie3' => 'Network Engineering',
                    'apportunitie4' => 'Cybersecurity',
                    'apportunitie5' => 'College of Planning, Building and Environment',
                    'apportunitie6' => 'Data Science',
                    'apportunitie7' => 'Data analyses',

                    'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                    'duration_study' => 'The duration of studying computer engineering at Al-Hajjawi College ranges from 3 to 4 years.',
                    'college_id' => 1,
                ],
                [
                    'name' => 'Civil Engineering',
                    'image' => 'civi.png',
                    'introduction' => "The College of Computer Engineering is an esteemed institution dedicated to providing a comprehensive education in the field of computer engineering. With a strong emphasis on merging hardware and software concepts, the college equips students with the skills and knowledge required to design, develop, and innovate cutting-edge computer systems and technologies. Through a blend of theoretical instruction and practical experience, the college's faculty, composed of experts in the field, guide students in mastering areas such as digital systems, computer architecture, embedded systems, and software engineering. State-of-the-art laboratories and research facilities offer students hands-on opportunities to explore real-world applications, fostering creativity and problem-solving abilities. Graduates from the College of Computer Engineering are prepared to excel in various industries, including electronics, telecommunications, robotics, and automation. With a strong foundation in both hardware and software, they become adept at tackling complex challenges and contributing to the advancement of technology in the modern world. ",
                    'apportunities' => 'Embedded Systems',
                    'apportunitie2' => 'Hardware Design',
                    'apportunitie3' => 'Network Engineering',
                    'apportunitie4' => 'Cybersecurity',
                    'apportunitie5' => 'College of Planning, Building and Environment',
                    'apportunitie6' => 'Data Science',
                    'apportunitie7' => 'Data analyses',

                    'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                    'duration_study' => 'The duration of studying computer engineering at Al-Hajjawi College ranges from 3 to 4 years.',
                    'college_id' => 1,
                ],
                [
                    'name' => ' Chemical Engineering',
                    'image' => 'chemical.png',
                    'introduction' => "The College of Computer Engineering is an esteemed institution dedicated to providing a comprehensive education in the field of computer engineering. With a strong emphasis on merging hardware and software concepts, the college equips students with the skills and knowledge required to design, develop, and innovate cutting-edge computer systems and technologies. Through a blend of theoretical instruction and practical experience, the college's faculty, composed of experts in the field, guide students in mastering areas such as digital systems, computer architecture, embedded systems, and software engineering. State-of-the-art laboratories and research facilities offer students hands-on opportunities to explore real-world applications, fostering creativity and problem-solving abilities. Graduates from the College of Computer Engineering are prepared to excel in various industries, including electronics, telecommunications, robotics, and automation. With a strong foundation in both hardware and software, they become adept at tackling complex challenges and contributing to the advancement of technology in the modern world. ",
                    'apportunities' => 'Embedded Systems',
                    'apportunitie2' => 'Hardware Design',
                    'apportunitie3' => 'Network Engineering',
                    'apportunitie4' => 'Cybersecurity',
                    'apportunitie5' => 'College of Planning, Building and Environment',
                    'apportunitie6' => 'Data Science',
                    'apportunitie7' => 'Data analyses',

                    'cost' => 'The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.',
                    'duration_study' => 'The duration of studying computer engineering at Al-Hajjawi College ranges from 3 to 4 years.',
                    'college_id' => 1,
                ],
              

            ];

            // Insert data into the 'categories' table
            foreach ($departmints as $departmint) {
                DB::table('departments')->insert($departmint);

            }
        }
    }
}
