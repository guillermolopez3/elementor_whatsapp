<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Widget_WhatsApp extends Widget_Base {

    //Nombre del archivo 
    public function get_name() {
        return 'whatsapp';
    }
    
    //Nombre que se verá en la sidebar, el cual identificará al widget.
    public function get_title() {
        return __( 'WhatsApp', 'elementor' );
    }
    
    //Icono del widget, puede ser de Font Awesome.
    public function get_icon() {
        return 'eicon-alert';
    }
    
    //Palabras claves para localizar al widget
    public function get_keywords() {
        return [ 'whatsapp', 'enlace', 'generador' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_alert',
            [
                'label' => __( 'WhatsApp', 'elementor' ),
            ]
        );
    }

    protected function render(){
        ?>
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            /* Firefox */
            input[type=number] {
            -moz-appearance: textfield;
            }
            .textos_elem{
                margin-bottom: 0;
            }
        </style>
        <div>
            <p class="textos_elem">Ingrese el nro con el formato <strong>5493515122247</strong> </p>
            <input type="number" id="nro" onkeyup="escribir()"/>
        </div>
        <br>
        <div>
            <p class="textos_elem">Ingrese el mensaje</p>
            <input type="text" id="msg" onkeyup="escribir()" />
        </div>
        <div id="salida"></div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
            function escribir(){
                var nro = $('#nro').val();
                var msg = $('#msg').val();
                var api = 'https://api.whatsapp.com/send?phone=';
                var text = '&text=';
                var resul = api + nro + text + msg;
                //$("#salida").html('https://api.whatsapp.com/send?phone='+ nro + '&text=' + msg);
                $("#salida").html('Enlace: <a target="_blank" href="' + resul + ' ">' + resul + '</a>');
                
            }
            
        </script>
        <?php
    }
}