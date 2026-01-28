<?php get_header(); ?>

<?php
$slider = new WP_Query([
    'post_type' => 'slider',
    'posts_per_page' => -1,
    'order' => 'ASC'
]);

// Slider
if ($slider->have_posts()) : ?>
<section class="slider-hero">
    <div class="swiper mySwiper relative">
        <div class="swiper-wrapper">
            <?php while ($slider->have_posts()) : $slider->the_post(); 
                $image_id = get_post_thumbnail_id();
            ?>
            <div class="swiper-slide">

                <?php if ($image_id) : ?>
                    <img src="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" 
                         alt="<?php the_title(); ?>" 
                         class="slide-bg" 
                         loading="eager" />
                <?php endif; ?>

                <div class="slide-overlay"></div>

                <div class="absolute inset-0 z-10 flex flex-col items-center justify-center text-center px-4">
                    <div class="text-white mb-10">
                        <h1 class="text-3xl lg:text-5xl font-bold leading-tight md:text-5xl">
                            Venta y corte a medida de
                        </h1>
                        <h2 class="text-4xl lg:text-7xl font-extrabold mt-1 text-lime-500 md:text-xl">
                            PANEL DE SÁNDWICH
                        </h2>
                    </div>

                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>"
                       class="mt-48 inline-block rounded-full border border-[#9FCE00] bg-white
         px-10 py-4 text-lg font-bold uppercase text-[#3E509D]
         transition hover:-translate-y-1 hover:bg-[#9FCE00] hover:text-white">
                        CONTACTA CON NOSOTROS
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
        
        <h2 class="text-3xl lg:text-4xl font-bold text-center mb-12">
            <span class="text-blue-800">¿Por qué nuestro</span>
            <span class="text-lime-500"> PANEL SÁNDWICH?</span>
        </h2>
    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    
            
        <div class="flex items-center gap-4 bg-gray-50 py-8 px-6 rounded-lg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/../assets/icons/atencion.svg" 
                alt="Atención" 
                class="w-12 h-12 flex-shrink-0"
            >
            <p class="text-blue-800 font-semibold leading-snug">
                <span class="block">Atención</span>
                real y personalizada
            </p>
        </div>
    
           
        <div class="flex items-center gap-4 bg-gray-50 py-8 px-6 rounded-lg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/../assets/icons/asesoramiento.svg" 
                alt="Asesoramiento" 
                class="w-12 h-12 flex-shrink-0"
            >
            <p class="text-blue-800 font-semibold leading-snug">
                <span class="block">Asesoramiento</span>
                técnico especializado
            </p>
        </div>
    
        <div class="flex items-center gap-4 bg-gray-50 py-8 px-6 rounded-lg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/../assets/icons/logistica.svg" 
                alt="Logística" 
                class="w-12 h-12 flex-shrink-0"
            >
            <p class="text-blue-800 font-semibold leading-snug">
                <span class="block">Logística</span>
                eficiente y adaptable
            </p>
        </div>
    
            
            <div class="flex items-center gap-4 bg-gray-50 p-6 rounded-lg">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/../assets/icons/calidad.svg" 
                    alt="Calidad" 
                    class="w-12 h-12 flex-shrink-0"
                >
                <p class="text-blue-800 font-semibold leading-snug">
                    Compromiso con la calidad
                </p>
            </div>
    
        </div>
    </div>
    
     
        <div class="swiper-button-prev">
        <i class="fa-solid fa-arrow-left"></i>
        </div>

        <div class="swiper-button-next">
            <i class="fa-solid fa-arrow-right"></i>
        </div>
            </div>
    </section>
    <?php endif; wp_reset_postdata(); ?>

<main class="w-full bg-[#F5F8F9] mt-8 lg:mt-12">
    <section class="container mx-auto px-4 py-16">
        
        <h2 class="text-4xl font-bold text-center mb-12">
            <span class="text-lime-500">PANEL SÁNDWICH</span>
            <span class="text-blue-800"> para tu proyecto</span>
        </h2>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php
            $query = new WP_Query([
                'post_type' => 'productos',
                'posts_per_page' => 6
            ]);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('template-parts/producto/card');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </section>
</main>

<!-- formulario -->

<section class="w-full bg-[#EEF2F3] py-24 relative mb-12">
    <div class="container mx-auto px-4 max-w-7xl relative">

        <h2 class="text-center text-2xl md:text-3xl lg:text-4xl font-bold mb-14">
            <span class="text-blue-800">Pide </span>
            <span class="text-lime-500 relative inline-block">
                PRESUPUESTO
                <span class="absolute left-0 -bottom-2 w-full h-1 bg-lime-500 rounded-full"></span>
            </span>
        </h2>

        <form class="p-8 lg:p-14 space-y-16">

            <!-- Primera fila -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Nombre*</label>
                    <input type="text" placeholder="Nombre" class="w-full bg-white rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>

                <div>
                    <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Teléfono</label>
                    <input type="tel" placeholder="+34" class="w-full bg-white rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>

                <div>
                    <label class="block text-xs sm:text-sm  font-semibold text-gray-700 mb-2">Correo electrónico*</label>
                    <input type="email" placeholder="mail@mail.com" class="w-full bg-white rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>
            </div>

            <!-- Segunda fila -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Material*</label>
                    <select class="w-full bg-white rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-lime-500 appearance-none" style="background-image: url('data:image/svg+xml;charset=UTF-8,<svg fill=\'%239FCE00\' height=\'24\' viewBox=\'0 0 24 24\' width=\'24\' xmlns=\'http://www.w3.org/2000/svg\'><path d=\'M7 10l5 5 5-5z\'/></svg>'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1em;">
                        <option>Material</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Metros cuadrados*</label>
                    <input type="text" placeholder="m2" class="w-full bg-white rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-lime-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Provincia de entrega*</label>
                    <select class="w-full bg-white rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-lime-500 appearance-none" style="background-image: url('data:image/svg+xml;charset=UTF-8,<svg fill=\'%239FCE00\' height=\'24\' viewBox=\'0 0 24 24\' width=\'24\' xmlns=\'http://www.w3.org/2000/svg\'><path d=\'M7 10l5 5 5-5z\'/></svg>'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1em;">
                        <option>Seleccione provincia</option>
                    </select>
                </div>
            </div>

            <!-- Checkboxes -->
            <div class="space-y-3 text-sm text-gray-600 max-w-4xl mt-6">
                <label class="flex items-start gap-2">
                    <input type="checkbox" class="mt-1 accent-lime-500">
                    <span>Acepto recibir información comercial, así como descuentos, promociones y actualizaciones de producto pertinentes.</span>
                </label>

                <label class="flex items-start gap-2">
                    <input type="checkbox" class="mt-1 accent-lime-500">
                    <span>Confirmo que he leído y aceptado la <a href="#" class="text-blue-700 underline">política de privacidad y venta</a>.</span>
                </label>
            </div>

        </form>

  
        <div class="absolute left-1/2 text-xs sm:text-sm -bottom-30 transform -translate-x-1/2 z-20">
    <button type="submit" 
            class="bg-blue-800 hover:bg-blue-900 text-white font-bold uppercase 
                   px-4 py-2 sm:px-8 sm:py-3 md:px-12 md:py-4 rounded-full shadow-xl transition-all">
        Pide presupuesto
    </button>
</div>


    </div>
</section>

<section class="w-full bg-white py-24">
  <div class="container mx-auto px-8">
    <div class="flex flex-col md:flex-row md:items-start gap-8">

      <div class="md:w-1/2 flex justify-center">
        <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/pcercanos.png" 
             alt="Profesionales Cercanos" 
             class="w-2/3 md:w-4/5 h-auto rounded-lg shadow-lg">
      </div>

      <div class="md:w-1/2 text-blue-900 flex flex-col items-center md:items-start">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 mt-0 text-center md:text-left">
          Profesionales y <span class="text-[#9FCE00]">CERCANOS</span>
        </h2>
        <div class="max-w-[90%] md:max-w-[82%]">
          <p class="text-[#4F5665] text-justify leading-relaxed">
            Por eso, en <span class="text-blue-800 font-bold">XXXXXX</span> estamos en constante desarrollo en los materiales y técnicas de la construcción modular prefabricada.<br><br> <br>
            Contamos con un excelente equipo de ingenieros, delineantes, técnicos y <br> montadores con experiencia y profesionalidad con el fin de que el cliente siempre <br>tenga el mejor resultado posible.<br><br> <br>
            Nos encanta asesorarte e intentar dar solución a tus inquietudes y proyectos y para<br> ello creemos en el trato personal y humano para poder resolver todas tus dudas.
          </p>
          <a href="#contacto" class="inline-block px-6 py-3 mt-12 rounded-full border-2 border-[#9FCE00] bg-white text-[#3E509D] font-semibold text-sm sm:px-12 sm:py-4 sm:text-lg hover:bg-transparent hover:text-[#9FCE00] transition-colors duration-300">
            CONTACTA CON NOSOTROS
          </a>
        </div>
      </div>
      

    </div>

    <!-- cinta gris con los iconos svg de figma -->
    <section class="w-full bg-gray-50 py-6 mt-16">
  <div class="max-w mx-auto px-8">
    <div class="flex flex-wrap md:flex-nowrap items-stretch gap-6">

      <div class="flex items-center gap-4 p-4 flex-1 min-w-[220px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/../assets/icons/punto-venta.svg" 
          alt="Punto de venta" 
          class="w-10 h-10 flex-shrink-0"
        >
        <p class="text-blue-900 font-semibold leading-snug">
          <span class="block">Punto de venta</span>
          de panel sandwich
        </p>
      </div>

      <div class="hidden md:block w-[2px] h-12 bg-blue-800 self-center"></div>

      <div class="flex items-center gap-4 p-4 flex-1 min-w-[220px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/../assets/icons/dise.svg" 
          alt="Diseño" 
          class="w-10 h-10 flex-shrink-0"
        >
        <p class="text-blue-800 font-semibold leading-snug">
          <span>Diseño y fabricación</span>
          de estructuras
          
        </p>
      </div>

      <div class="hidden md:block w-[2px] h-12 bg-blue-800 self-center"></div>

      <div class="flex items-center gap-4 p-4 flex-1 min-w-[220px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/../assets/icons/ing.svg" 
          alt="Ingeniería" 
          class="w-10 h-10 flex-shrink-0"
        >
        <p class="text-blue-800 font-semibold leading-snug">
          <span class="block">Ingeniería</span>
        </p>
      </div>

      <div class="hidden md:block w-[2px] h-12 bg-blue-800 self-center"></div>

      <div class="flex items-center gap-4 p-4 flex-1 min-w-[220px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/../assets/icons/const.svg" 
          alt="Construcción" 
          class="w-10 h-10 flex-shrink-0"
        >
        <p class="text-blue-800 font-semibold leading-snug">
          <span class="block">Construcción</span>
          modular y prefabricada
        </p>
      </div>

    </div>
  </div>
</section>


    
  </div>
  
</section>

<!-- Reseñas de clientes -->
<section class="bg-[#E5EBF5] py-16">
  <div class="container mx-auto px-4 max-w-7xl">
   
    <!-- Versión para desktop (md y arriba) -->
    <div class="hidden md:flex items-center justify-between mb-12 relative">
      
      <h2 class="text-3xl lg:text-4xl text-center font-bold text-blue-800 absolute left-1/2 transform -translate-x-1/2 w-full">
        Reseñas de <span class="text-[#9FCE00]">CLIENTES</span>
     </h2> 

      <div class="flex-grow"></div>
      <div class="flex items-center space-x-4 gap-2 relative z-10">
        <button class="bg-white w-12 h-12 rounded-full shadow-md flex items-center justify-center border-2 border-[#3E509D] hover:bg-gray-50 transition-colors duration-200 group">
          <i class="fa-solid fa-arrow-left text-[#3E509D] text-base group-hover:text-[#3E509D] transition-colors duration-200"></i>
          <span class="sr-only">Anterior</span>
        </button>
        
        <button class="bg-[#3E509D] w-12 h-12 rounded-full shadow-md flex items-center justify-center hover:bg-blue-900 transition-colors duration-200 group">
          <i class="fa-solid fa-arrow-right text-white text-base group-hover:text-white transition-colors duration-200"></i>
          <span class="sr-only">Siguiente</span>
        </button>
      </div>
    </div>
    
    <!-- Versión para mobile (menos de md) -->
    <div class="md:hidden mb-12">
      <h2 class="text-3xl text-center font-bold text-blue-800 mb-6">
        Reseñas de <span class="text-[#9FCE00]">CLIENTES</span>
      </h2>
      
      <div class="flex items-center justify-center space-x-4 gap-2">
        <button class="bg-white w-12 h-12 rounded-full shadow-md flex items-center justify-center border-2 border-[#3E509D] hover:bg-gray-50 transition-colors duration-200 group">
          <i class="fa-solid fa-arrow-left text-[#3E509D] text-base group-hover:text-[#3E509D] transition-colors duration-200"></i>
          <span class="sr-only">Anterior</span>
        </button>
        
        <button class="bg-[#3E509D] w-12 h-12 rounded-full shadow-md flex items-center justify-center hover:bg-blue-900 transition-colors duration-200 group">
          <i class="fa-solid fa-arrow-right text-white text-base group-hover:text-white transition-colors duration-200"></i>
          <span class="sr-only">Siguiente</span>
        </button>
      </div>
    </div>
  
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8"> 
      <div class="bg-white p-6 md:p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-start justify-between mb-5">
          
          <div class="flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/cliente.png" alt="Carlos Javier" class="w-12 h-12 md:w-14 md:h-14 rounded-full mr-3 flex-shrink-0">
            <div class="bg-[#9FCE00] h-12 md:h-14 mr-3 md:mr-4" style="width: 1px;"></div>
            <h3 class="font-bold text-base md:text-lg text-blue-900">Carlos Javier</h3>
          </div>
          
          <div class="flex flex-col items-end">
            <div class="flex text-yellow-400 text-base md:text-lg mb-1">
              <span>★★★★★</span>
            </div>
            <span class="text-gray-500 text-xs md:text-sm">30/01/2024</span>
          </div>
        </div>
        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
          Me considero un cliente satisfecho. Me asesoraron como ninguna otra empresa. Cumplieron en los tiempos y excelente trato humano.
        </p>
      </div>

      
      <div class="bg-white p-6 md:p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-start justify-between mb-5">
          
          <div class="flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/cliente.png" alt="Carlos Javier" class="w-12 h-12 md:w-14 md:h-14 rounded-full mr-3 flex-shrink-0">
            <div class="bg-[#9FCE00] h-12 md:h-14 mr-3 md:mr-4" style="width: 1px;"></div>
            <h3 class="font-bold text-base md:text-lg text-blue-900">Carlos Javier</h3>
          </div>
          
          
          <div class="flex flex-col items-end">
            <div class="flex text-yellow-400 text-base md:text-lg mb-1">
              <span>★★★★★</span>
            </div>
            <span class="text-gray-500 text-xs md:text-sm">30/01/2024</span>
          </div>
        </div>
        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
          Atención muy buena por parte del comercial y entrega muy rápida.
        </p>
      </div>

      
      <div class="bg-white p-6 md:p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-start justify-between mb-5">
         
          <div class="flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/cliente.png" alt="Carlos Javier" class="w-12 h-12 md:w-14 md:h-14 rounded-full mr-3 flex-shrink-0">
            <div class="bg-[#9FCE00] h-12 md:h-14 mr-3 md:mr-4" style="width: 1px;"></div>
            <h3 class="font-bold text-base md:text-lg text-blue-900">Carlos Javier</h3>
          </div>
          
          <div class="flex flex-col items-end">
            <div class="flex text-yellow-400 text-base md:text-lg mb-1">
              <span>★★★★★</span>
            </div>
            <span class="text-gray-500 text-xs md:text-sm">30/01/2024</span>
          </div>
        </div>
        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
          Necesitaba unos paneles para un trabajo en mi casa, fui de forma particular y me atendieron muy bien y me explicaron todo al detalle, acabe comprando lo que necesitaba y sin duda volveré.
        </p>
      </div>

    </div>

  </div>
</section>
<section class="bg-[#9FCE00] py-16">
<div class="container mx-auto px-4">
    <div class="p-8 md:p-10 text-center">
      <h2 class="text-2xl md:text-3xl text-[#3E509D] font-semi leading-tight">
      <span class="text-[#3E509D] font-semi text-4xl md:text-5xl">¿</span>Necesitas asesoramiento
        <span class="block mt-2">
          <span class="text-white font-bold text-4xl md:text-5xl">PERSONALIZADO</span>
          <span class="text-[#3E509D] font-semi text-4xl md:text-5xl">?</span>
        </span>
      </h2>
      
      
      <div class="max-w-4xl mx-auto mt-8">
        <div class="text-lg md:text-xl text-[#3E509D] mb-8 leading-relaxed">
          <p class="block mb-4">
            Todos nuestros <strong class="text-[#3E509D] font-bold">Paneles Sandwich</strong> disponen de guías de montaje exclusivas.
          </p>
          <p class="block mb-4">
            Además, disponemos de un <strong class="text-[#3E509D] font-bold">departamento técnico</strong> para resolver sus dudas
          </p>
          <p class="block">
            y calculamos los elementos necesarios para su correcto montaje e instalación.
          </p>
        </div>
        
        <div class="inline-block bg-white text-[#3E509D] px-4 py-2 rounded-full cursor-pointer transition-all duration-300 hover:-translate-y-1 shadow-lg hover:shadow-xl shadow-blue-200
            sm:px-6 sm:py-3 md:px-8 md:py-5">
  <h3 class="text-sm sm:text-base md:text-xl md:leading-none font-bold tracking-wide m-0">
    CONTACTA CON NOSOTROS
  </h3>
</div>

      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
