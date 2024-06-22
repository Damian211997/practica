@extends('layouts.app')

@section('title', 'Nosotros - NutriLife')

@section('header')
<header id="header" class="relative w-full h-screen bg-gradient-to-tr from-pink-500 to-blue-400 flex justify-center items-center">
  <div class="absolute top-0 w-full p-4 bg-white bg-opacity-90 fixed shadow-lg animate__animated animate__fadeInDown">
    <div class="container mx-auto flex justify-between items-center">
      <div class="mobile-toggle flex flex-col justify-between w-8 h-6 cursor-pointer">
        <span class="block w-full h-1 bg-black"></span>
        <span class="block w-full h-1 bg-black"></span>
        <span class="block w-full h-1 bg-black"></span>
      </div>
      <nav>
        <ul class="flex space-x-4">
          <li><a class="smoothscroll text-black uppercase text-xs hover:text-pink-500 transition duration-300" href="#header">Inicio</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs hover:text-pink-500 transition duration-300" href="#about">Nosotros</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs hover:text-pink-500 transition duration-300" href="#services">Servicios</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs hover:text-pink-500 transition duration-300" href="#portfolio">Trabajos</a></li>
          <li><a class="smoothscroll text-black uppercase text-xs hover:text-pink-500 transition duration-300" href="#contact">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="text-center text-white animate__animated animate__fadeInDown">
    <h1 class="text-6xl md:text-8xl font-light uppercase">Limpio y Nutritivo</h1>
    <h2 class="text-lg md:text-xl font-normal uppercase tracking-widest mt-4">Una vida saludable empieza aquí</h2>
    <a class="smoothscroll mt-10 inline-block animate__animated animate__bounce" href="#about">
      <div class="mouse w-6 h-10 border-2 border-white rounded-full mx-auto relative flex justify-center items-center">
        <div class="wheel w-2 h-2 bg-white rounded-full animate__animated animate__fadeInDown animate__infinite animate__slow"></div>
      </div>
    </a>
  </div>
</header>
@endsection

@section('content')
<section id="about" class="py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Nosotros</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <p class="mb-8 animate__animated animate__fadeInUp">En NutriLife, estamos dedicados a promover una vida saludable a través de la nutrición equilibrada y estilos de vida activos. Nuestra misión es proporcionar información confiable, recetas nutritivas y productos de alta calidad para ayudarte a alcanzar tus objetivos de bienestar.</p>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-device-desktop icon"></span>Nuestro Proceso</h3>
        <p>Creemos en un enfoque holístico de la salud, combinando la ciencia moderna con la sabiduría tradicional. Nuestro proceso involucra una investigación exhaustiva y la colaboración con expertos para crear soluciones efectivas y sostenibles.</p>
      </div>
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-pen icon"></span>Nuestra Metodología</h3>
        <p>Priorizamos planes de nutrición personalizados que se adaptan a las necesidades individuales. Nuestro enfoque está centrado en el cliente, asegurando que cada persona reciba la orientación y el apoyo necesarios para tener éxito.</p>
      </div>
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-cog-outline icon"></span>Nuestra Meta</h3>
        <p>Nuestra meta es empoderar a las personas para que tomen decisiones informadas sobre su salud. Queremos ser una fuente confiable de consejos nutricionales y tips para una vida saludable.</p>
      </div>
      <div class="w-full md:w-1/2 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4"><span class="typcn typcn-lightbulb icon"></span>Nuestra Misión</h3>
        <p>Nuestra misión es inspirar y educar a las personas para que adopten estilos de vida más saludables. Estamos comprometidos con la promoción de la sostenibilidad y el respeto por el medio ambiente en todas nuestras prácticas.</p>
      </div>
    </div>
  </div>
</section>

<section id="team" class="py-16 bg-gray-100">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Conoce al Equipo</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <p class="mb-8 animate__animated animate__fadeInUp">Nuestro equipo está compuesto por profesionales dedicados y apasionados por la salud y la nutrición. Trabajamos juntos para ofrecerte los mejores productos y servicios.</p>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Juan Pérez" class="w-full rounded-lg shadow-lg mb-4 hover:shadow-xl transition duration-300">
        <h4 class="text-xl font-semibold">Juan Pérez</h4>
        <p class="text-gray-700">Nutricionista Principal</p>
        <p class="text-gray-600">Con más de 15 años de experiencia en nutrición deportiva, Juan se especializa en crear planes personalizados para atletas y entusiastas del fitness.</p>
        <div class="flex space-x-2 justify-center mt-2">
          <a href="#" class="typcn typcn-social-facebook-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-instagram-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-google-plus-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-linkedin-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
        </div>
      </div>
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Ana García" class="w-full rounded-lg shadow-lg mb-4 hover:shadow-xl transition duration-300">
        <h4 class="text-xl font-semibold">Ana García</h4>
        <p class="text-gray-700">Coach de Bienestar</p>
        <p class="text-gray-600">Ana es una coach de bienestar certificada con una pasión por ayudar a las personas a alcanzar sus objetivos de salud a través de la orientación y el apoyo personalizados.</p>
        <div class="flex space-x-2 justify-center mt-2">
          <a href="#" class="typcn typcn-social-facebook-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-instagram-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-google-plus-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-linkedin-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
        </div>
      </div>
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Carlos Martínez" class="w-full rounded-lg shadow-lg mb-4 hover:shadow-xl transition duration-300">
        <h4 class="text-xl font-semibold">Carlos Martínez</h4>
        <p class="text-gray-700">Experto en Fitness</p>
        <p class="text-gray-600">Carlos tiene una formación en ciencias del deporte y ayuda a los clientes a integrar rutinas de ejercicios efectivas con sus planes nutricionales.</p>
        <div class="flex space-x-2 justify-center mt-2">
          <a href="#" class="typcn typcn-social-facebook-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-instagram-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-google-plus-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-linkedin-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
        </div>
      </div>
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Lucía Fernández" class="w-full rounded-lg shadow-lg mb-4 hover:shadow-xl transition duration-300">
        <h4 class="text-xl font-semibold">Lucía Fernández</h4>
        <p class="text-gray-700">Dietista</p>
        <p class="text-gray-600">Lucía es una dietista registrada que se enfoca en crear planes de comidas balanceados que se adapten a diversas necesidades y preferencias dietéticas.</p>
        <div class="flex space-x-2 justify-center mt-2">
          <a href="#" class="typcn typcn-social-facebook-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-instagram-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-google-plus-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
          <a href="#" class="typcn typcn-social-linkedin-circular text-2xl text-gray-700 hover:text-pink-500 transition duration-300"></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="py-16 bg-gray-50">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Servicios</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <div class="flex flex-wrap -mx-4 mb-8">
      <div class="w-full md:w-1/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4">Planes de Nutrición Personalizados</h3>
        <p>Creemos planes de nutrición personalizados adaptados a tus necesidades únicas, ayudándote a alcanzar tus objetivos de salud de manera efectiva.</p>
      </div>
      <div class="w-full md:w-1/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4">Coaching de Bienestar</h3>
        <p>Nuestros coaches de bienestar proporcionan la orientación y el apoyo que necesitas para hacer cambios duraderos en tu estilo de vida.</p>
      </div>
      <div class="w-full md:w-1/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <h3 class="text-2xl font-semibold mb-4">Recetas Saludables</h3>
        <p>Explora nuestra colección de recetas nutritivas y deliciosas que hacen que comer saludable sea fácil y agradable.</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-2/3 px-4 mb-8 animate__animated animate__fadeInUp">
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Talleres de Nutrición</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 90%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Clases de Cocina</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 80%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Programas de Fitness</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 30%;"></div>
          </div>
        </div>
        <div class="mb-4">
          <h4 class="text-xl font-semibold mb-2">Bienestar Corporativo</h4>
          <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-2 bg-gradient-to-r from-pink-500 to-blue-400" style="width: 70%;"></div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/3 px-4 animate__animated animate__fadeInUp">
        <p>Ofrecemos una variedad de servicios para ayudarte a alcanzar una salud y bienestar óptimos, desde planes de nutrición personalizados hasta programas de fitness y soluciones de bienestar corporativo.</p>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Trabajos</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Trabajo Uno" class="w-full rounded-lg shadow-lg hover:opacity-75 transition duration-300 hover:shadow-xl">
      </div>
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Trabajo Dos" class="w-full rounded-lg shadow-lg hover:opacity-75 transition duration-300 hover:shadow-xl">
      </div>
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Trabajo Tres" class="w-full rounded-lg shadow-lg hover:opacity-75 transition duration-300 hover:shadow-xl">
      </div>
      <div class="w-full md:w-1/4 px-4 mb-8 animate__animated animate__fadeInUp">
        <img src="http://placehold.it/220x220" alt="Trabajo Cuatro" class="w-full rounded-lg shadow-lg hover:opacity-75 transition duration-300 hover:shadow-xl">
      </div>
    </div>
  </div>
</section>

<section id="testimonial" class="py-16 bg-gray-50">
  <div class="container mx-auto text-center">
    <div class="quoteLoop">
      <blockquote class="quote hidden animate__animated animate__fadeInUp">
        <img src="http://placehold.it/100x100" class="w-24 h-24 rounded-full mx-auto mb-4" alt=""/>
        <h5 class="text-xl font-light">&ldquo;NutriLife me ayudó a transformar mi estilo de vida. El plan de nutrición personalizado y el apoyo de sus coaches de bienestar fueron invaluables.&rdquo;<br><small>Juan Pérez, Cliente</small></h5>
      </blockquote>
      <blockquote class="quote hidden animate__animated animate__fadeInUp">
        <img src="http://placehold.it/100x100" class="w-24 h-24 rounded-full mx-auto mb-4" alt=""/>
        <h5 class="text-xl font-light">&ldquo;Las recetas saludables y las clases de cocina ofrecidas por NutriLife hicieron que adoptar una dieta nutritiva fuera fácil y agradable.&rdquo;<br><small>Ana García, Cliente</small></h5>
      </blockquote>
    </div>
  </div>
</section>

<section id="contact" class="py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-light mb-4 animate__animated animate__fadeInUp">Contáctanos</h1>
    <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-blue-400 mx-auto mb-8"></div>
    <form class="max-w-lg mx-auto animate__animated animate__fadeInUp">
      <div class="mb-4">
        <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre</label>
        <input type="text" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
        <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="telefono" class="block text-gray-700 font-bold mb-2">Teléfono</label>
        <input type="tel" id="telefono" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="asunto" class="block text-gray-700 font-bold mb-2">Asunto</label>
        <input type="text" id="asunto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="mensaje" class="block text-gray-700 font-bold mb-2">Mensaje</label>
        <textarea id="mensaje" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
      </div>
      <button type="submit" class="bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 drop-shadow-md">Enviar</button>
    </form>
  </div>
</section>
@endsection

@if (in_array(Route::currentRouteName(), ['about', 'login.index', 'register.index']))
  @section('footer')
  <footer class="py-12 bg-gray-800 text-white">
    <div class="container mx-auto text-center transform transition-all duration-500 hover:scale-105">
      <div class="flex flex-wrap justify-between items-center">
        <div class="w-full md:w-1/3 text-left mb-4 md:mb-0">
          <h4 class="text-xl font-semibold">NutriLife</h4>
          <p class="mt-2">Promoviendo una vida saludable a través de la nutrición equilibrada y estilos de vida activos.</p>
        </div>
        <div class="w-full md:w-1/3 mb-4 md:mb-0">
          <nav class="flex justify-center space-x-4">
            <a href="#header" class="hover:underline">Inicio</a>
            <a href="#about" class="hover:underline">Nosotros</a>
            <a href="#services" class="hover:underline">Servicios</a>
            <a href="#portfolio" class="hover:underline">Trabajos</a>
            <a href="#contact" class="hover:underline">Contacto</a>
          </nav>
        </div>
        <div class="w-full md:w-1/3 text-right">
          <div class="flex justify-center md:justify-end space-x-4">
            <a href="https://www.facebook.com" class="hover:text-gray-400"><span class="fab fa-facebook text-3xl"></span></a>
            <a href="https://www.instagram.com" class="hover:text-gray-400"><span class="fab fa-instagram text-3xl"></span></a>
            <a href="https://www.google.com" class="hover:text-gray-400"><span class="fab fa-google-plus text-3xl"></span></a>
            <a href="https://www.linkedin.com" class="hover:text-gray-400"><span class="fab fa-linkedin text-3xl"></span></a>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <p>&copy; 2024 NutriLife. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
  @endsection
@endif
