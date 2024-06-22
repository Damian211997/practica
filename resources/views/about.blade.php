@extends('layouts.app')

@section('title', 'Nosotros - NutriLife')

@section('header')
<header id="header" class="relative w-full h-screen bg-gradient-to-tr from-pink-500 to-blue-400 flex justify-center items-center">
  <div class="absolute top-0 w-full p-4 bg-white bg-opacity-90 fixed shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <div class="mobile-toggle flex flex-col justify-between w-8 h-6 cursor-pointer">
        <span class="block w-full h-1 bg-black"></span>
        <span class="block w-full h-1 bg-black"></span>
        <span class="block w-full h-1 bg-black"></span>
      </div>
      <nav>
        <ul class="flex space-x-4">
          <li><a class="smoothscroll text-black uppercase text-xs" href="#header">Home</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs" href="#about">About</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs" href="#services">Services</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs" href="#portfolio">Work</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="text-center text-white animate__animated animate__fadeInDown">
    <h1 class="text-6xl md:text-8xl font-light uppercase">Clean & Nutritious</h1>
    <h2 class="text-lg md:text-xl font-normal uppercase tracking-widest mt-4">Healthy living starts here</h2>
    <a class="smoothscroll mt-10 inline-block" href="#about">
      <div class="mouse w-6 h-10 border-2 border-white rounded-full mx-auto relative flex justify-center items-center">
        <div class="wheel w-2 h-2 bg-white rounded-full"></div>
      </div>
    </a>
  </div>
</header>
@endsection

@section('content')
<section id="about" class="py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">About</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <p class="mb-8 animate__animated animate__fadeInUp">At NutriLife, we are dedicated to promoting healthy living through balanced nutrition and active lifestyles. Our mission is to provide reliable information, nutritious recipes, and high-quality products to help you achieve your wellness goals.</p>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-device-desktop icon"></span>Our Process</h3>
        <p>We believe in a holistic approach to health, combining modern science with traditional wisdom. Our process involves thorough research and collaboration with experts to create effective and sustainable solutions.</p>
      </div>
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-pen icon"></span>Our Approach</h3>
        <p>We prioritize personalized nutrition plans that cater to individual needs. Our approach is client-centered, ensuring that each person receives the guidance and support they need to succeed.</p>
      </div>
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-cog-outline icon"></span>Our Goal</h3>
        <p>Our goal is to empower individuals to make informed decisions about their health. We aim to be a trusted resource for nutritional advice and healthy living tips.</p>
      </div>
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-lightbulb icon"></span>Our Mission</h3>
        <p>Our mission is to inspire and educate people to adopt healthier lifestyles. We are committed to promoting sustainability and respecting the environment in all our practices.</p>
      </div>
    </div>
  </div>
</section>

<section id="team" class="py-16 bg-gray-100">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Meet the Team</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <p class="mb-8 animate__animated animate__fadeInUp">Our team is comprised of dedicated professionals who are passionate about health and nutrition. We work together to bring you the best products and services.</p>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Naruto Uzumaki" class="w-full rounded-lg shadow-lg mb-4">
        <h4 class="text-xl font-semibold">Naruto Uzumaki</h4>
        <p class="text-gray-700">Creative Director</p>
        <div class="flex space-x-2 justify-center mt-2">
          <span class="typcn typcn-social-facebook-circular text-2xl text-gray-700"></span>
          <span class="typcn typcn-social-instagram-circular text-2xl text-gray-700"></span>
          <span class="typcn typcn-social-google-plus-circular text-2xl text-gray-700"></span>
          <span class="typcn typcn-social-linkedin-circular text-2xl text-gray-700"></span>
        </div>
      </div>
      <!-- Repeat similar blocks for Sasuke Uchiha, Shikamaru Nara, and Sakura Haruno -->
    </div>
  </div>
</section>

<section id="services" class="py-16 bg-gray-50">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Services</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <div class="flex flex-wrap -mx-4 mb-8">
      <div class="w-full md:w-1/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4">Personalized Nutrition Plans</h3>
        <p>We create customized nutrition plans tailored to your unique needs, helping you achieve your health goals effectively.</p>
      </div>
      <div class="w-full md:w-1/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4">Wellness Coaching</h3>
        <p>Our wellness coaches provide the guidance and support you need to make lasting changes to your lifestyle.</p>
      </div>
      <div class="w-full md:w-1/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4">Healthy Recipes</h3>
        <p>Explore our collection of nutritious and delicious recipes that make healthy eating enjoyable and easy.</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-2/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Nutrition Workshops</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 90%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Cooking Classes</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 80%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Fitness Programs</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 30%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Corporate Wellness</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 70%;"></div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/3 px-4 animate__animated animate__fadeInUp">
        <p>We offer a variety of services to help you achieve optimal health and wellness, from personalized nutrition plans to fitness programs and corporate wellness solutions.</p>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Work</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Work One" class="w-full rounded-lg shadow-lg hover:opacity-75 transition duration-300">
      </div>
      <!-- Repeat similar blocks for other works -->
    </div>
  </div>
</section>

<section id="testimonial" class="py-16 bg-gray-50">
  <div class="container mx-auto text-center">
    <div class="quoteLoop">
      <blockquote class="quote hidden animate__animated animate__fadeInUp">
        <img src="http://placehold.it/100x100" class="w-24 h-24 rounded-full mx-auto mb-4" alt=""/>
        <h5 class="text-xl font-light">&ldquo;NutriLife helped me transform my lifestyle. The personalized nutrition plan and support from their wellness coaches were invaluable.&rdquo;<br><small>John Doe, Client</small></h5>
      </blockquote>
      <blockquote class="quote hidden animate__animated animate__fadeInUp">
        <img src="http://placehold.it/100x100" class="w-24 h-24 rounded-full mx-auto mb-4" alt=""/>
        <h5 class="text-xl font-light">&ldquo;The healthy recipes and cooking classes offered by NutriLife made it easy for me to adopt a nutritious diet.&rdquo;<br><small>Jane Smith, Client</small></h5>
      </blockquote>
    </div>
  </div>
</section>

<section id="contact" class="py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Contact Us</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <form class="max-w-lg mx-auto animate__animated animate__fadeInUp">
      <div class="mb-4">
        <label for="nombre" class="block text-gray-700 font-bold mb-2">Name</label>
        <input type="text" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
        <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="telefono" class="block text-gray-700 font-bold mb-2">Phone</label>
        <input type="tel" id="telefono" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="asunto" class="block text-gray-700 font-bold mb-2">Subject</label>
        <input type="text" id="asunto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="mensaje" class="block text-gray-700 font-bold mb-2">Message</label>
        <textarea id="mensaje" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
      </div>
      <button type="submit" class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 drop-shadow-md">Send</button>
    </form>
  </div>
</section>
@endsection
