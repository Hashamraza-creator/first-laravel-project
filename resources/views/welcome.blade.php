<?php
// Your information here
$fullName = "Hasham Raza";
$bio = "I am a software engineering graduate with a passion for frontend and mobile development.";
$interests = ["Traveling", "Food", "Photography", "Fashion Designing", "Psychology"];
$skills = [
    "Frontend Development" => ["React", "Angular", "HTML", "CSS", "JavaScript"],
    "Mobile Development" => ["Swift", "Xcode", "SwiftUI"],
    "UI/UX Design" => ["Figma", "Canva", "Photoshop"],
    "Cloud Technologies" => ["AWS", "Microsoft Azure"]
];
$projects = [
    "buzzTalk" => "A messaging app built with Swift focusing on an intuitive and efficient messaging experience.",
    "Card War Game" => "A simple iOS card game built with Swift, allowing players to compare card values.",
    "Portfolio Website" => "A personal website showcasing my skills, projects, and experience."
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - <?php echo $fullName; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar Section -->
    <nav class="fixed top-0 left-0 w-full bg-blue-600 text-white shadow-md z-10">
    <div class="max-w-screen-xl mx-auto p-4 flex items-center">

    <a href="#home" class="text-3xl font-semibold mr-[-20px]">Hasham Raza</a>

        <div class="space-x-6 ml-auto">
            <a href="#interests" class="hover:text-gray-200">Interests</a>
            <a href="#skills" class="hover:text-gray-200">Skills</a>
            <a href="#projects" class="hover:text-gray-200">Projects</a>
        </div>
    </div>
</nav>

    <!-- Header Section with Animation -->
    <header id="home" class="bg-blue-600 text-white p-6 text-center mt-16" data-aos="fade-down">
        <h1 class="text-4xl font-bold transition-all transform hover:scale-105"><?php echo $fullName; ?>'s Portfolio</h1>
        <p class="mt-2 text-xl transition-all opacity-90 hover:opacity-100"><?php echo $bio; ?></p>
    </header>

    <!-- Interests Section with Grid Layout and Scroll Animations -->
    <section id="interests" class="py-10 px-6" data-aos="fade-up">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Interests</h2>
        <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            <?php foreach ($interests as $interest): ?>
                <li class="text-lg transition-all transform hover:scale-90 hover:translate-y-2" data-aos="fade-up">
                    <?php echo $interest; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Skills Section with Card-style Layout and Hover Effects -->
    <section id="skills" class="py-10 px-6 bg-white rounded-lg shadow-lg mb-10" data-aos="zoom-in">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Skills</h2>
        <div class="space-y-6">
            <?php foreach ($skills as $category => $technologies): ?>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow" data-aos="zoom-in">
                    <h3 class="text-xl font-semibold"><?php echo $category; ?></h3>
                    <ul class="list-disc ml-6 grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <?php foreach ($technologies as $tech): ?>
                            <li class="text-lg"><?php echo $tech; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Projects Section with Hover Effect -->
    <section id="projects" class="py-10 px-6" data-aos="fade-up">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Projects</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php foreach ($projects as $title => $description): ?>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transition-transform" data-aos="fade-up">
                    <h3 class="text-xl font-semibold"><?php echo $title; ?></h3>
                    <p class="mt-2"><?php echo $description; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-blue-600 text-white p-4 text-center mt-10" data-aos="fade-up">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $fullName; ?>. All rights reserved.</p>
    </footer>

    <!-- AOS Script -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
