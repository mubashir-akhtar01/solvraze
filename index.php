<?php
session_start(); 
if (!isset($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf'];

header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Solvraze builds Scalable Web, AI, and automation solutions for businesses, blending innovation and intelligent systems.">
  <meta property="og:title" content="Solvraze – Intelligent Digital Systems">
  <meta property="og:description" content="Solvraze builds scalable web, AI, and automation solutions for businesses.">
  <meta property="og:image" content="https://www.solvraze.com/assets/og-image.jpg">
  <meta property="og:url" content="https://www.solvraze.com">
  <title>Solvraze – Intelligent Digital Systems</title>

  <link rel="icon" href="/assets/images/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/images/favicon/favicon-48x48.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png?v=1">
  <link rel="canonical" href="https://www.solvraze.com/">
  <link rel="preload" href="./assets/css/font.css?v=1" as="style" onload="this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="./assets/css/font.css?v=1"></noscript>
  <link rel="stylesheet" href="/assets/css/output.css?v=1">
  <!-- <link rel="preload" href="./assets/css/output.css?v=1" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Solvraze",
    "url": "https://www.solvraze.com",
    "logo": "https://www.solvraze.com/assets/images/favicon/favicon-48x48.png",
    "sameAs": [
      "https://www.linkedin.com/company/solvraze"
    ]
  }
  </script>

  <style>
    body{margin:0;font-family:system-ui,sans-serif}
    header{background:#fff;position:fixed;width:100%;z-index:50}
    h1{font-size:2.25rem;font-weight:700;color:#111827}
  </style>

</head>

<body class="bg-white text-gray-900">
<!-- ================= NAVBAR ================= -->
<header class="bg-white shadow-md fixed w-full z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="logo text-gray">
      Solvraze
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-8 text-sm font-medium text-gray-700">
      <a href="#home" class="hover:text-gray-900">Home</a>
      <a href="#features" class="hover:text-gray-900">Features</a>
      <a href="#stats" class="hover:text-gray-900">Achievements</a>
      <a href="#technologies" class="hover:text-gray-900">Technologies</a>
      <a href="#about" class="hover:text-gray-900">About</a>
      <a href="#contact" class="hover:text-gray-900">Contact</a>
    </nav>

    <!-- Mobile Menu Button -->
    <div class="md:hidden">
      <button id="mobile-menu-button" aria-label="Open menu" class="text-gray-700 hover:text-blue-500 focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white px-6 pt-2 pb-4 space-y-2">
    <a href="#home" class="block text-gray-700 hover:text-blue-500">Home</a>
    <a href="#features" class="block text-gray-700 hover:text-blue-500">Features</a>
    <a href="#stats" class="block text-gray-700 hover:text-blue-500">Achievements</a>
    <a href="#technologies" class="block text-gray-700 hover:text-blue-500">Technologies</a>
    <a href="#about" class="block text-gray-700 hover:text-blue-500">About</a>
    <a href="#contact" class="block text-gray-700 hover:text-blue-500">Contact</a>
  </div>
</header>


<main>
  <!-- ================= HERO ================= -->
  <section class="relative overflow-hidden pt-32 fade-in-up min-h-[80vh]" id="home">
    <div class="mx-auto max-w-7xl px-6 py-20 grid lg:grid-cols-2 gap-16 items-center">
      <!-- Left Content -->
      <div>
        <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">
          Intelligent Digital Systems
        </p>
        <h1 class="mt-4 text-4xl sm:text-4xl font-bold tracking-tight text-gray-900">
          Building Scalable Web, AI & Automation Solutions
        </h1>
        <p class="mt-6 text-lg text-gray-600 leading-relaxed">
          Solvraze is a technology-driven company specializing in modern Web Platforms,
          AI-powered Systems, and Intelligent Automation workflows.
        </p>
        <div class="mt-8 flex gap-4">
          <a href="#contact"
            class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow hover:bg-indigo-700">
            Get Started
          </a>
          <a href="#about"
            class="inline-flex items-center justify-center rounded-md border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50">
            Learn More
          </a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="relative w-full aspect-3/2">
        <img
          src="./assets/images/hero.webp?v=1"
          width="720"
          height="480"
          fetchpriority="high"
          decoding="async"
          alt="Technologies"
          class="absolute inset-0 w-full h-full object-cover rounded-2xl shadow-xl ring-1 ring-gray-200"
        />
      </div>

    </div>
  </section>

  <!-- ================= FEATURES ================= -->
  <section id="features" class="relative bg-gray-50 py-24 overflow-hidden">
    <div class="relative mx-auto max-w-7xl px-6">
      <div class="max-w-2xl text-center mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900">
          Everything you need to build and scale
        </h2>
        <p class="mt-4 text-lg text-gray-600">
          From Concept to Production, Solvraze delivers systems designed for Performance, Reliability, and Growth.
        </p>
      </div>

      <div class="mt-16 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 relative z-10">

        <!-- Web Development -->
        <div class="p-6 border rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 bg-white">
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
            </svg>
            <h3 class="text-xl font-semibold">Web Development</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">
            Scalable Web Applications built with modern frameworks and best practices.
          </p>
        </div>

        <!-- AI & LLM Solutions -->
        <div class="p-6 border rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 bg-white">
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-indigo-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            <h3 class="text-xl font-semibold">AI & LLM Solutions</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">
            Intelligent Systems powered by Advanced Language Models and Data Pipelines.
          </p>
        </div>

        <!-- Automation -->
        <div class="p-6 border rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 bg-white">
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-yellow-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6h13M5 6h4v13H5V6z" />
            </svg>
            <h3 class="text-xl font-semibold">Automation</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">
            Agentic workflows and automation to streamline complex business processes.
          </p>
        </div>

        <!-- UI / UX Design -->
        <div class="p-6 border rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 bg-white">
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-pink-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 014 0v15.292a4 4 0 01-4 0V4.354z" />
            </svg>
            <h3 class="text-xl font-semibold">UI / UX Design</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">
            Clean, usable interfaces designed for clarity and conversion.
          </p>
        </div>

        <!-- Product Engineering -->
        <div class="p-6 border rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 bg-white">
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-blue-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7h-6V3H10v4H4v6h6v4h4v-4h6z" />
            </svg>
            <h3 class="text-xl font-semibold">Product Engineering</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">
            End-to-end product development from MVP to enterprise scale.
          </p>
        </div>

        <!-- SEO & Marketing -->
        <div class="p-6 border rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 bg-white">
          <div class="flex items-center mb-4">
            <svg class="h-8 w-8 text-red-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M4 11h16v10H4V11z" />
            </svg>
            <h3 class="text-xl font-semibold">SEO & Marketing</h3>
          </div>
          <p class="text-gray-600 leading-relaxed">
            Data-driven strategies to increase visibility and growth.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ================= STATS / ACHIEVEMENTS ================= -->
  <section id="stats" class="py-24 bg-white fade-in-up min-h-500px">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-gray-900">Our Impact in Numbers</h2>
      <p class="mt-4 text-lg text-gray-600">We deliver measurable results for our clients worldwide</p>

      <div class="mt-16 grid sm:grid-cols-2 md:grid-cols-4 gap-12">

        <!-- Projects Completed -->
        <div class="flex flex-col items-center">
          <div class="bg-indigo-100 p-4 rounded-full inline-block">
            <svg class="h-10 w-10 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7 20h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <p class="mt-4 text-4xl font-bold text-gray-900 counter tabular-nums w-[6ch] text-center" data-target="70">0</p>
          <p class="mt-2 text-gray-600">Projects Completed</p>
        </div>

        <!-- Clients Served -->
        <div class="flex flex-col items-center">
          <div class="bg-green-100 p-4 rounded-full inline-block">
            <svg class="h-10 w-10 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7a4 4 0 118 0 4 4 0 01-8 0zM5 21v-2a4 4 0 014-4h6a4 4 0 014 4v2" />
            </svg>
          </div>
          <p class="mt-4 text-4xl font-bold text-gray-900 counter tabular-nums w-[6ch] text-center" data-target="120">0</p>
          <p class="mt-2 text-gray-600">Clients Served</p>
        </div>


        <!-- Users Impacted -->
        <div class="flex flex-col items-center">
          <div class="bg-yellow-100 p-4 rounded-full inline-block">
            <svg class="h-10 w-10 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2h5m4-16a4 4 0 110 8 4 4 0 010-8z" />
            </svg>
          </div>
          <p class="mt-4 text-4xl font-bold text-gray-900 counter tabular-nums w-[6ch] text-center" data-target="500">0</p>
          <p class="mt-2 text-gray-600">Users Impacted</p>
        </div>

        <!-- Automation Workflows -->
        <div class="flex flex-col items-center">
          <div class="bg-pink-100 p-4 rounded-full inline-block">
            <svg class="h-10 w-10 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L15 12l-5.25-5M4 12h16" />
            </svg>
          </div>
          <p class="mt-4 text-4xl font-bold text-gray-900 counter tabular-nums w-[6ch] text-center" data-target="200">0</p>
          <p class="mt-2 text-gray-600">Automation Workflows</p>
        </div>

      </div>
    </div>
  </section>



  <!-- ================= TECHNOLOGIES ================= -->
  <section id="technologies" class="py-24 bg-gray-50 fade-in-up min-h-420px">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-gray-900">Technologies We Excel In</h2>
      <p class="mt-4 text-lg text-gray-600">Our expertise spans AI, Web Development, and Automation</p>

      <!-- Continuous Carousel -->
      <div class="mt-12 overflow-hidden relative">
        <div class="flex gap-14 animate-scroll">
          <!-- Slide Items -->
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/aws.svg?v=1" loading="lazy" height="24" width="24" alt="AWS" class="h-24 w-24">
            <p class="mt-2 font-semibold">AWS</p>
          </div> 
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/python.svg?v=1" loading="lazy" height="24" width="24" alt="Python" class="h-24 w-24">
            <p class="mt-2 font-semibold">Python</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/scikitlearn.svg?v=1" loading="lazy" height=""24  width="24"alt="Scikit-learn" class="h-24 w-24">
            <p class="mt-2 font-semibold">Scikit-Learn</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/tensorflow.svg?v=1" loading="lazy" height="24" width="24" alt="TensorFlow" class="h-24 w-24">
            <p class="mt-2 font-semibold">TensorFlow</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/pytorch.svg?v=1" loading="lazy" height="24" width="24" alt="PyTorch" class="h-24 w-24">
            <p class="mt-2 font-semibold">PyTorch</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/fastapi.svg?v=1" loading="lazy" height="24" width="24" alt="FastAPI" class="h-24 w-24">
            <p class="mt-2 font-semibold">FastAPI</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/laravel.svg?v=1" loading="lazy" height="24" width="24" alt="Laravel" class="h-24 w-24">
            <p class="mt-2 font-semibold">Laravel</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/nodejs.svg?v=1" loading="lazy" height="24"  width="24" alt="Node" class="h-24 w-24">
            <p class="mt-2 font-semibold">Node.js</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/mysql.svg?v=1" loading="lazy" height="24" width="24" alt="MySQL" class="h-24 w-24">
            <p class="mt-2 font-semibold">MySQL</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/react.svg?v=1" loading="lazy" height="24" width="24" alt="React" class="h-24 w-24">
            <p class="mt-2 font-semibold">React.js</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/vuejs.svg?v=1" loading="lazy" height="24" width="24" alt="Vue.js" class="h-24 w-24">
            <p class="mt-2 font-semibold">Vue.js</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/javascript.svg?v=1" loading="lazy" height="24" width="24" alt="Javascript" class="h-24 w-24">
            <p class="mt-2 font-semibold">Javascript</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/html5.svg?v=1" loading="lazy" height="24" width="24" alt="HTML5" class="h-24 w-24">
            <p class="mt-2 font-semibold">HTML5</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/css3.svg?v=1" loading="lazy" height="24" width="24" alt="CSS3" class="h-24 w-24">
            <p class="mt-2 font-semibold">CSS3</p>
          </div>

          <!-- Repeat the same items for seamless scroll -->
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/python.svg?v=1" loading="lazy" height="24" width="24" alt="Python" class="h-24 w-24">
            <p class="mt-2 font-semibold">Python</p>
          </div>
          <div class="shrink-0 flex flex-col items-center">
            <img src="./assets/images/tensorflow.svg?v=1" loading="lazy" height="24" width="24" alt="TensorFlow" class="h-24 w-24">
            <p class="mt-2 font-semibold">TensorFlow</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= ABOUT ================= -->
  <section id="about" class="py-20 fade-in-up">
    <div class="mx-auto max-w-7xl px-6 grid lg:grid-cols-2 gap-16 items-center">
      <div>
        <h2 class="text-4xl font-bold tracking-tight text-gray-900">
          About Solvraze
        </h2>
        <p class="mt-6 text-lg text-gray-600 leading-relaxed">
          Solvraze blends Innovation and Intelligence to build Systems that scale.
          We specialize in Web Platforms, AI-powered Applications, and Automation
          Designed to solve real-world problems.
        </p>
        <p class="mt-4 text-gray-600">
          Our approach focuses on long-term maintainability, performance, and
          measurable business impact.
        </p>
      </div>
      <div class="relative w-full aspect-3/2">
        <img
          src="./assets/images/about.webp?v=1"
          alt="About Solvraze"
          width="720"
          height="480"
          loading="lazy"
          class="absolute inset-0 w-full h-full object-cover rounded-2xl shadow-xl ring-1 ring-gray-200"
        />
      </div>
    </div>
  </section>

  <!-- ================= CONTACT ================= -->
  <section id="contact" class="bg-gray-50 py-20">
    <div class="mx-auto max-w-4xl px-6">
      <div class="text-center">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900">Let’s build something Intelligent</h2>
        <p class="mt-4 text-lg text-gray-600">Get in touch to discuss your product, platform, or automation needs.</p>
      </div>
      <div class="mt-12 bg-white shadow-xl rounded-xl p-8 sm:p-12">
        <p id="formMessage" class="text-center font-medium hidden"></p>
        <form id="contactForm" class="grid grid-cols-1 gap-y-6">
          <input type="hidden" name="csrf" value="<?= $csrfToken ?>">
          <input type="text" name="company" style="display:none">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" id="name" required
                  value="<?php echo $name ?? ''; ?>"
                  class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                  placeholder="John Doe">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" required
                  value="<?php echo $email ?? ''; ?>"
                  class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                  placeholder="you@example.com">
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" name="message" rows="5" required
                      class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                      placeholder="Tell us more about your project..."><?php echo $message ?? ''; ?></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="inline-flex justify-center rounded-lg bg-indigo-600 px-8 py-3 text-lg font-semibold text-white shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors">
              Send Message
            </button>
          </div>
          <div class="mt-6 flex justify-center min-h-80px">
            <div class="g-recaptcha" data-sitekey="6LfW_zssAAAAAAaR4uq10L7gSW4XKyHvH4ZhfEOh"></div>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-white py-16">
  <div class="mx-auto max-w-7xl px-6 grid md:grid-cols-3 gap-12">
    
    <!-- Logo + Tagline -->
    <div>
      <div class="logo text-white text-2xl mb-4">Solvraze</div>
      <p class="text-gray-400 max-w-xs">
        Innovative Solutions for Web, AI, and Automation. Building Intelligent Systems that scale.
      </p>
      <div class="mt-4 flex space-x-4">
        <a href="https://www.linkedin.com/company/solvraze" class="text-gray-400 hover:text-white transition-colors" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22.23 0H1.77C.79 0 0 .774 0 1.727v20.545C0 23.226.79 24 1.77 24h20.46C23.21 24 24 23.226 24 22.273V1.727C24 .774 23.21 0 22.23 0zM7.09 20.452H3.56V9h3.53v11.452zM5.325 7.433c-1.13 0-2.045-.918-2.045-2.047 0-1.13.915-2.048 2.045-2.048 1.13 0 2.045.918 2.045 2.048 0 1.129-.915 2.047-2.045 2.047zM20.452 20.452h-3.53v-5.57c0-1.328-.027-3.036-1.852-3.036-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.53V9h3.39v1.561h.047c.472-.895 1.623-1.84 3.338-1.84 3.568 0 4.223 2.35 4.223 5.407v6.324z"/>
          </svg>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61585619265664" class="text-gray-400 hover:text-white transition-colors" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326 24h11.495v-9.294H9.691V11.01h3.13V8.41c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.696h-3.12V24h6.116C23.403 24 24 23.403 24 22.674V1.326C24 .597 23.403 0 22.675 0z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="md:col-span-2 flex justify-between mt-8 md:mt-0">
      <div>
        <h2 class="font-semibold text-white mb-4">Quick Links</h2>
        <ul class="space-y-2">
          <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
          <li><a href="#features" class="hover:text-white transition-colors">Features</a></li>
          <li><a href="#stats" class="block hover:text-white">Achievements</a></li>
          <li><a href="#technologies" class="block hover:text-white">Technologies</a></li>
          <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
          <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
        </ul>
      </div>

      <div>
        <h2 class="font-semibold text-white mb-4">Contact</h2>
        <p>Email: contact@solvraze.com</p>
        <p>Phone: +92 (339) 2387679</p>
      </div>
    </div>

  </div>

  <div class="mt-12 border-t border-gray-800 pt-6 text-center text-white text-sm">
    © 2025 Solvraze. All rights reserved.
  </div>
</footer>


<!-- ================= MOBILE MENU SCRIPT ================= -->
<script defer>
  const btn = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
  const faders = document.querySelectorAll('.fade-in-up');
  const appearOptions = { threshold: 0.25, rootMargin: "0px 0px -100px 0px" };
  const appearOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(fader => appearOnScroll.observe(fader));

  // Counter
  const counters = document.querySelectorAll('.counter');
  const speed = 300; // higher = slower
  const animateCounters = () => {
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / speed;

        if(count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target.toLocaleString(); // format numbers
        }
      };
      updateCount();
    });
  };

  // Animate counters when section is visible
  const statsSection = document.getElementById('stats');
  const observer = new IntersectionObserver(entries => {
    if(entries[0].isIntersecting){
      animateCounters();
      observer.disconnect();
    }
  }, {threshold: 0.5});
  observer.observe(statsSection);

</script>

<script>
  let recaptchaLoaded = false;
  const contactSection = document.getElementById('contact');

  const captchaObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !recaptchaLoaded) {
        const s = document.createElement('script');
        s.src = "https://www.google.com/recaptcha/api.js";
        s.async = true;
        document.body.appendChild(s);
        recaptchaLoaded = true;
        observer.disconnect();
      }
    });
  }, { threshold: 0.1 });

  captchaObserver.observe(contactSection);
</script>


<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const formMessage = document.getElementById('formMessage');
    const formData = new FormData(form);

    formMessage.classList.add('hidden');
    formMessage.textContent = '';

    try {
        const response = await fetch('send-mail.php', {
            method: 'POST',
            body: formData,
            credentials: 'same-origin'
        });

        const result = await response.json();

        formMessage.textContent = result.message;
        formMessage.classList.remove('hidden');

        if (result.success) {
            formMessage.classList.remove('text-red-500');
            formMessage.classList.add('text-green-500');
            form.reset();
            grecaptcha.reset();
        } else {
            formMessage.classList.remove('text-green-500');
            formMessage.classList.add('text-red-500');
        }

    } catch (error) {
        formMessage.textContent = 'Something went wrong. Please try again.';
        formMessage.classList.remove('hidden');
        formMessage.classList.add('text-red-500');
    }
});
</script>


</body>
</html>
