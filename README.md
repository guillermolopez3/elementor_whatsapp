Este complemento es un widget para Elementor que te permite colocar el nro de teléfono y el mensaje
y te genera el link de WhatsApp para enviar un mensaje a ese nro

Para agregarlo a elementor como widget hay que:
1- ir a la ruta 
wp-content\plugins\elementor\includes\widgets
y copiar el archivo whatsapp.php

2- ir a la ruta
wp-content > plugins > elementor > includes > managers > widgets.php
y agregar el nombre del archivo php en el array
 private function init_widgets() {
		$build_widgets_filename = [
            ...
        ]

Con eso ya te aparece como widget dentro de elementor