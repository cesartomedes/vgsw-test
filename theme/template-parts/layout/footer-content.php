<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<footer id="colophon" class="bg-[#3E509D] text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-8">
      
      <!-- Columna 1: CONTACTO -->
      <div class="mt-15 text-center md:text-left">
       
        <ul class="space-y-4">
          <li class="flex items-start md:items-start md:justify-start justify-center">
            <i class="fas fa-envelope mt-1 mr-3 flex-shrink-0" style="color: #9FCE00; width: 20px;"></i>
            <span class="text-gray-300">dominio@dominio.es</span>
          </li>
          <li class="flex items-start md:items-start md:justify-start justify-center">
		  <i class="fas fa-phone-alt text-[#9FCE00] mt-1 mr-3 flex-shrink-0 transform rotate-90"></i>
            <span class="text-gray-300">123 456 789</span>
          </li>
          <li class="flex items-start md:items-start md:justify-start justify-center">
            <i class="fas fa-map-marker-alt mt-1 mr-3 flex-shrink-0" style="color: #9FCE00; width: 20px;"></i>
            <span class="text-gray-300">Poligono Industrial "XX XXXXXX"<br>Parcela XX 12345, Zaragoza</span>
          </li>
        </ul>
      </div>
      
      <!-- Línea divisoria en móvil -->
      <div class="md:hidden">
        <hr class="border-gray-700 my-4">
      </div>
      
      <!-- Columna 2: PRODUCTOS -->
      <div class="text-center md:text-left">
        <h3 class="text-xl font-bold mb-6 text-[#9FCE00] uppercase">PRODUCTOS</h3>
        <ul class="space-y-3">
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Panel Sándwich Cubierta</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Panel Sándwich Fachada</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Panel Sándwich Lana de Roca</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Panel Sándwich Panel Teja</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Panel Sándwich Segunda</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Chapa Metálica</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Remates Panel Sándwich</a></li>
        </ul>
      </div>
      
      <!-- Línea divisoria en móvil -->
      <div class="md:hidden">
        <hr class="border-gray-700 my-4">
      </div>
      
      <!-- Columna 3: INFORMACIÓN GENERAL -->
	  <div class="text-center md:text-left">
  <h3 class="text-xl font-bold mb-6 text-[#9FCE00] uppercase">INFORMACIÓN GENERAL</h3>
  <ul class="space-y-3">
    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Proyectos</a></li>
    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Construcción Modular</a></li>
    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Blog</a></li>
    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Contacto</a></li>
  </ul>
  
 
  <div class="flex gap-4 mt-8 justify-center md:justify-start">
    <a href="https://facebook.com" target="_blank" class="hover:opacity-80 transition-opacity duration-200">
      <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/fb.svg" alt="Facebook" class="w-8 h-8">
    </a>
    <a href="https://twitter.com" target="_blank" class="hover:opacity-80 transition-opacity duration-200">
      <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/x.svg" alt="Twitter" class="w-8 h-8">
    </a>
    <a href="https://instagram.com" target="_blank" class="hover:opacity-80 transition-opacity duration-200">
      <img src="<?php echo get_template_directory_uri(); ?>/../assets/img/ig.svg" alt="Instagram" class="w-8 h-8">
    </a>
  </div>
</div>
      
      
      <div class="md:hidden">
        <hr class="border-gray-700 my-4">
      </div>
      
      <!-- Columna 4: INFORMACIÓN LEGAL -->
      <div class="text-center md:text-left">
        <h3 class="text-xl font-bold mb-6 text-[#9FCE00] uppercase">INFORMACIÓN LEGAL</h3>
        <ul class="space-y-3">
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Aviso legal</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Política de privacidad</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Política de cookies</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Condiciones de venta</a></li>
          <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Política de Gestión</a></li>
        </ul>
      </div>
      
    </div>
  </div>
</footer><!-- #colophon -->


<div class="bg-[#1A2862] py-4">
  <div class="container mx-auto px-4">
    <div class="text-center text-white text-sm">
      <p>Copyright © <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Todos los derechos reservados.</p>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>