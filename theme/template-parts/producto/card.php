<article class="bg-white rounded-xl overflow-hidden p-5 flex flex-col h-full shadow-lg hover:shadow-xl transition-shadow duration-300">

    <?php 
    $content = get_the_content();
    $first_image = '';

    // Buscar la primera imagen
    preg_match('/<img[^>]+src="([^">]+)"/', $content, $matches);
    if (!empty($matches[1])) {
        $first_image = esc_url($matches[1]);
    }

    // Obtener solo el texto (sin imágenes) para la descripción
    $text_content = preg_replace('/<img[^>]+\>/i', '', $content);
    $text_content = wp_strip_all_tags($text_content);
    $excerpt = wp_trim_words($text_content, 20, '...');
    ?>

    <!-- Imagen -->
    <?php if ($first_image) : ?>
        <div class="mb-4 h-64 overflow-hidden rounded-lg">
            <img src="<?php echo $first_image; ?>" 
                 alt="<?php the_title_attribute(); ?>" 
                 class="w-full h-full object-cover shadow-sm">
        </div>
    <?php else : ?>
        <div class="mb-4 h-64 bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg flex items-center justify-center shadow-sm">
            <span class="text-5xl text-gray-300">🏭</span>
        </div>
    <?php endif; ?>

    <!-- Título -->
    <h2 class="text-xl font-bold mb-3 text-blue-900 text-center">
        <?php the_title(); ?>
    </h2>

    <!-- Descripción -->
    <div class="text-gray-700 mb-5 flex-grow">
        <p class="text-sm leading-relaxed text-center"><?php echo $excerpt; ?></p>
    </div>

    <!-- Botón -->
    <div class="mt-auto text-center pt-4">
        <a href="<?php the_permalink(); ?>" 
           class="inline-block bg-lime-500 hover:bg-lime-600 text-white font-bold py-2.5 px-8 rounded-3xl text-sm uppercase tracking-wider transition-colors duration-300 hover:shadow-md shadow-sm">
            LEER MÁS
        </a>
    </div>

</article>
