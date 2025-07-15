<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        /**
         * Fades images in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadMediaOnLoad ( target ) {
            target.style.animationPlayState = "running";
            console.log(target);
        }
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top-anchor">
    <?php wp_body_open(); ?>