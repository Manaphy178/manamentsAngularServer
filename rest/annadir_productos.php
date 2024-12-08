<?php
require_once "../librerias_php/setUp.php";

$instrumentos = [
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "Piano SU",
        "marca" => "Yamaha",
        "descripcion" => "Piano acústico de la serie SU de Yamaha, fabricado a mano con materiales de alta calidad, ofreciendo un sonido resonante, claridad de tonos graves y agudos, y una acción de teclas excepcional que proporciona una experiencia interpretativa de primer nivel. Ideal para estudios profesionales y salas de conciertos.",
        "precio" => 5000.0,
        "tipo" => "Acústico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Guitarra Acústica FG",
        "marca" => "Yamaha",
        "descripcion" => "Guitarra acústica de la serie FG de Yamaha, famosa por su tono cálido, proyección equilibrada y una construcción duradera con tapa de abeto macizo, ofreciendo un sonido lleno y resonante ideal tanto para principiantes como para guitarristas avanzados.",
        "precio" => 350.0,
        "tipo" => "Acústico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Bajo BB",
        "marca" => "Yamaha",
        "descripcion" => "Bajo eléctrico de la serie BB, reconocido por su tono profundo, sustain prolongado, y una gran versatilidad sonora que lo hace adecuado para diversos estilos musicales, desde rock hasta jazz, con una construcción robusta y cómoda para tocar en escenarios o en el estudio.",
        "precio" => 700.0,
        "tipo" => "Eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Guitarra Eléctrica Revstar",
        "marca" => "Yamaha",
        "descripcion" => "Guitarra eléctrica Revstar de Yamaha, caracterizada por su diseño moderno inspirado en motocicletas clásicas, un sonido dinámico y potente ideal para géneros como rock y metal, con pastillas humbucker de alta salida y un cuerpo ergonómico para mayor confort durante largas sesiones de interpretación.",
        "precio" => 800.0,
        "tipo" => "Eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Batería Live Custom Hybrid Oak",
        "marca" => "Yamaha",
        "descripcion" => "Batería acústica Live Custom Hybrid Oak de Yamaha, construida con capas de roble y un núcleo de phenol para un sonido más robusto y con mayor proyección. Ideal para actuaciones en vivo, esta batería destaca por su ataque potente y una excelente respuesta de tono que se adapta a múltiples géneros musicales.",
        "precio" => 4000.0,
        "tipo" => "Acústico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Batería Electrónica DTX10 Series",
        "marca" => "Yamaha",
        "descripcion" => "Batería electrónica DTX10 Series de Yamaha, diseñada para ofrecer una experiencia de percusión extremadamente realista gracias a sus pads de silicona y su módulo de sonido avanzado, permitiendo una amplia gama de sonidos y funcionalidades, ideal para bateristas profesionales y estudios de grabación.",
        "precio" => 3000.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Viento",
        "nombre_instrumento" => "Trompeta YTR-9335CHS",
        "marca" => "Yamaha",
        "descripcion" => "Trompeta de la serie YTR-9335CHS, conocida por su facilidad de ejecución, proyección impresionante, y un sonido cálido con una excelente afinación en todos los registros. Construida con precisión para músicos de orquestas y solistas exigentes.",
        "precio" => 2500.0,
        "tipo" => "Viento",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Viento",
        "nombre_instrumento" => "Saxofón YAS-875EX",
        "marca" => "Yamaha",
        "descripcion" => "Saxofón alto de la serie YAS-875EX de Yamaha, diseñado para ofrecer un rendimiento superior con un sonido brillante y potente, respuesta rápida y una excelente proyección. Ideal para intérpretes profesionales que buscan versatilidad en jazz, clásico y otros estilos.",
        "precio" => 4500.0,
        "tipo" => "Viento",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Viento",
        "nombre_instrumento" => "Flauta Serie 900",
        "marca" => "Yamaha",
        "descripcion" => "Flauta de la serie 900 de Yamaha, con una respuesta rápida, construcción en plata maciza para un tono cálido y proyectado, diseñada para músicos profesionales que requieren una precisión excepcional y expresividad en sus interpretaciones.",
        "precio" => 2000.0,
        "tipo" => "Viento",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Cuerda",
        "nombre_instrumento" => "Violín YVN500S",
        "marca" => "Yamaha",
        "descripcion" => "Violín de nivel intermedio YVN500S de Yamaha, reconocido por su tono claro y resonante, con maderas seleccionadas que brindan una proyección óptima. Ideal para estudiantes avanzados y músicos que buscan un sonido refinado y una ejecución cómoda.",
        "precio" => 800.0,
        "tipo" => "Cuerda",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Cuerda",
        "nombre_instrumento" => "Viola VA7SG",
        "marca" => "Yamaha",
        "descripcion" => "Viola VA7SG de Yamaha, un instrumento de cuerda de calidad superior con un tono rico y cálido, ideal para músicos avanzados y profesionales que requieren una respuesta tonal precisa y una construcción duradera.",
        "precio" => 1000.0,
        "tipo" => "Cuerda",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "Teclado Portátil PSR-EW425",
        "marca" => "Yamaha",
        "descripcion" => "Teclado portátil PSR-EW425 de Yamaha, equipado con 76 teclas sensibles al tacto, más de 800 sonidos, y características educativas avanzadas como lecciones integradas y conectividad USB, ideal para principiantes y músicos en desarrollo.",
        "precio" => 350.0,
        "tipo" => "Electrónico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "Sintetizador MONTAGE M",
        "marca" => "Yamaha",
        "descripcion" => "Sintetizador MONTAGE M de Yamaha, con un motor de síntesis híbrido que combina AWM2 y FM-X, permitiendo la creación de sonidos complejos y manipulaciones en tiempo real gracias a su Super Knob y funciones avanzadas de control en vivo. Ideal para músicos y productores que buscan un sintetizador de alto rendimiento.",
        "precio" => 2000.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Timbales Serie TP-8300R",
        "marca" => "Yamaha",
        "descripcion" => "Timbales de la serie TP-8300R de Yamaha, con una construcción de cobre martillado a mano para un tono rico y resonante, diseñado para músicos de orquestas sinfónicas y bandas que requieren una resonancia excepcional y durabilidad en cada presentación.",
        "precio" => 1500.0,
        "tipo" => "Acústico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "Kiyola KF-10",
        "marca" => "Roland",
        "descripcion" => "Piano digital Kiyola (Made in Japan series KF-10) de Roland, combina un diseño elegante de inspiración escandinava con tecnología de sonido de última generación. Este piano digital cuenta con un mueble artesanal de madera maciza, fabricado por artesanos de la renombrada empresa Karimoku, y un motor de sonido SuperNATURAL que reproduce con gran fidelidad la resonancia y el tono de un piano acústico. Con teclas de madera PHA-50 y un sistema de altavoces integrados, ofrece una experiencia musical envolvente y auténtica, ideal tanto para decoración de interiores modernos como para músicos exigentes.",
        "precio" => 4500.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "GAIA 2",
        "marca" => "Roland",
        "descripcion" => "Sintetizador GAIA 2 de Roland, una potente herramienta para el diseño de sonido y la experimentación musical. Equipado con un motor de síntesis avanzado, este sintetizador es capaz de crear una amplia gama de sonidos, desde texturas ambientales hasta leads agresivos. Cuenta con un panel de control intuitivo con faders, perillas y botones iluminados para un flujo de trabajo rápido y creativo. Además, incluye polifonía mejorada, efectos integrados, y un teclado de 49 teclas sensibles al tacto, lo que lo convierte en una excelente opción tanto para estudios como para presentaciones en vivo.",
        "precio" => 800.0,
        "tipo" => "Electrónico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "GR-55",
        "marca" => "Roland",
        "descripcion" => "Sintetizador de guitarra GR-55 de Roland, un revolucionario procesador de guitarra que combina sintetización avanzada y modelado de amplificadores. Equipado con la tecnología COSM, este dispositivo permite transformar el sonido de tu guitarra en una amplia gama de timbres, desde emulaciones de instrumentos acústicos hasta complejos pads de sintetizador. Con 910 tonos diferentes, MIDI integrado, y capacidad para conectar una pastilla GK, es ideal tanto para guitarristas que desean expandir su paleta sonora como para músicos de estudio en busca de versatilidad.",
        "precio" => 1200.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "Katana Artist Gen 3",
        "marca" => "Roland",
        "descripcion" => "Sintetizador de bajo Katana Artist Gen 3 de Roland, diseñado específicamente para bajistas que buscan un sonido potente y personalizado. Este sintetizador combina modelado de amplificadores con efectos premium, y ofrece un motor de sonido completamente ajustable con control de tono preciso. Incluye 5 tipos de amplificadores, efectos integrados, y un altavoz especial Waza de 12 pulgadas que proporciona un rendimiento inigualable tanto en el escenario como en el estudio.",
        "precio" => 1100.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "VAD507 V-Drums Acoustic Design",
        "marca" => "Roland",
        "descripcion" => "Batería electrónica VAD507 de Roland, perteneciente a la serie V-Drums Acoustic Design, combina la estética clásica de un set acústico con la tecnología digital avanzada de Roland. Ofrece pads con parches de malla de doble capa para una sensación realista y un sistema de sonido dinámico que incluye el módulo TD-27, proporcionando una extensa biblioteca de kits personalizables. Con un chasis de madera real y herrajes de alta calidad, esta batería está diseñada para brindar una experiencia de interpretación auténtica, ideal para bateristas profesionales que buscan versatilidad tanto en el estudio como en el escenario.",
        "precio" => 3500.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "SPD-SX PRO Sampling Pad",
        "marca" => "Roland",
        "descripcion" => "Pad de percusión SPD-SX PRO de Roland, el estándar para músicos que necesitan llevar su creatividad a nuevos niveles en el escenario y en el estudio. Este pad de muestras avanzado permite cargar y manipular hasta 4 GB de muestras, ofreciendo 9 pads sensibles al tacto con retroalimentación LED para una mejor visualización en escenarios oscuros. Con funciones como Multi-Pad Sampling, efectos integrados, y conectividad avanzada, es una herramienta esencial para bateristas, DJs y productores que desean integrar elementos electrónicos en sus actuaciones en vivo.",
        "precio" => 1000.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Viento",
        "nombre_instrumento" => "Aerophone AE-20",
        "marca" => "Roland",
        "descripcion" => "Instrumento de viento digital Aerophone AE-20 de Roland, diseñado para músicos versátiles que buscan la expresividad de un instrumento de viento tradicional combinado con la flexibilidad digital. Equipado con un sensor de respiración y teclas sensibles, el AE-20 permite interpretar sonidos de saxofón, flauta, clarinete y otros instrumentos de viento con gran realismo. Además, incluye una extensa librería de sonidos electrónicos, conectividad Bluetooth para aplicaciones de música móvil, y un diseño ergonómico que lo hace perfecto tanto para el estudio como para presentaciones en vivo.",
        "precio" => 900.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "EK-50 Limitless ENTERTAINER KEYBOARD",
        "marca" => "Korg",
        "descripcion" => "Teclado profesional con acompañamiento automático, ideal para entretenimiento y actuaciones en vivo.",
        "precio" => 450.00,
        "tipo" => "Teclado",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "XE20 DIGITAL ENSEMBLE PIANO",
        "marca" => "Korg",
        "descripcion" => "Piano digital con acompañamientos, adecuado tanto para principiantes como para músicos avanzados.",
        "precio" => 750.00,
        "tipo" => "Piano digital",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "Pa600 PROFESSIONAL ARRANGER",
        "marca" => "Korg",
        "descripcion" => "Teclado arranger profesional con sonidos realistas y funciones avanzadas de edición.",
        "precio" => 1200.00,
        "tipo" => "Arranger",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "modwave module WAVETABLE SYNTHESIZER",
        "marca" => "Korg",
        "descripcion" => "Sintetizador de tablas de ondas con capacidades de modulación avanzadas, ideal para diseñadores de sonido.",
        "precio" => 900.00,
        "tipo" => "Sintetizador",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "opsix module ALTERED FM SYNTHESIZER",
        "marca" => "Korg",
        "descripcion" => "Sintetizador de síntesis FM alterada, perfecto para exploración sonora y diseño de tonos únicos.",
        "precio" => 950.00,
        "tipo" => "Sintetizador FM",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "WAVE SEQUENCING SYNTHESIZER",
        "marca" => "Korg",
        "descripcion" => "Sintetizador de secuenciación de ondas con funciones avanzadas de manipulación de sonido.",
        "precio" => 1100.00,
        "tipo" => "Sintetizador",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "CELVIANO AP-550BN",
        "marca" => "Casio",
        "descripcion" => "Piano digital de alta gama con teclado de acción de martillo graduado, ideal para interpretaciones clásicas.",
        "precio" => 1300.00,
        "tipo" => "Piano digital",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "CELVIANO AP-550WE",
        "marca" => "Casio",
        "descripcion" => "Piano digital con un elegante acabado en blanco, adecuado para entornos domésticos y profesionales.",
        "precio" => 1350.00,
        "tipo" => "Piano digital",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "CELVIANO AP-S450BK",
        "marca" => "Casio",
        "descripcion" => "Piano digital con sonidos de alta calidad y funciones avanzadas para estudiantes y profesionales.",
        "precio" => 1200.00,
        "tipo" => "Piano digital",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Piano",
        "nombre_instrumento" => "CELVIANO AP-S450BN",
        "marca" => "Casio",
        "descripcion" => "Piano digital con un diseño en color marrón, ideal para una experiencia de interpretación auténtica.",
        "precio" => 1250.00,
        "tipo" => "Piano digital",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "CT-S200WE Casiotone",
        "marca" => "Casio",
        "descripcion" => "Sintetizador compacto y portátil, perfecto para principiantes y músicos en movimiento.",
        "precio" => 150.00,
        "tipo" => "Sintetizador portátil",
        "gamma" => "Baja",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "CT-S100 Casiotone",
        "marca" => "Casio",
        "descripcion" => "Teclado compacto diseñado para principiantes, con funciones simples y facilidad de uso.",
        "precio" => 100.00,
        "tipo" => "Sintetizador portátil",
        "gamma" => "Baja",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizadores",
        "nombre_instrumento" => "CT-S1-76BK Casiotone",
        "marca" => "Casio",
        "descripcion" => "Sintetizador portátil con 76 teclas, ideal para músicos que buscan portabilidad sin sacrificar funciones.",
        "precio" => 200.00,
        "tipo" => "Sintetizador portátil",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Stratocaster Player Plus de Edición Limitada",
        "marca" => "Fender",
        "descripcion" => "Guitarra eléctrica con diseño icónico y mejoras modernas, ideal para guitarristas que buscan versatilidad.",
        "precio" => 1200.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Stratocaster HSS HT Player Plus de Edición Limitada",
        "marca" => "Fender",
        "descripcion" => "Guitarra eléctrica con configuración HSS y puente fijo, perfecta para tonos pesados y solos.",
        "precio" => 1300.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Fender x Hello Kitty Stratocaster blanca",
        "marca" => "Fender",
        "descripcion" => "Edición especial con diseño temático de Hello Kitty, ideal para coleccionistas y fans.",
        "precio" => 900.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Stratocaster Player II British Racing Green de Edición Limitada",
        "marca" => "Fender",
        "descripcion" => "Guitarra de edición limitada con acabado en verde, destacada por su tono y estilo clásico.",
        "precio" => 1400.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Jazz Bass V American Ultra II",
        "marca" => "Fender",
        "descripcion" => "Bajo de 5 cuerdas con un diseño moderno y electrónica avanzada, ideal para músicos profesionales.",
        "precio" => 1600.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Jazz Bass American Ultra II",
        "marca" => "Fender",
        "descripcion" => "Bajo eléctrico con un perfil delgado y comodidad mejorada para largas sesiones de interpretación.",
        "precio" => 1500.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Jaguar Bass Mark Hoppus de Edición Limitada",
        "marca" => "Fender",
        "descripcion" => "Bajo de edición especial diseñado en colaboración con Mark Hoppus, ideal para fans del punk rock.",
        "precio" => 1400.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Jazz Bass Player Plus x Blu DeTiger de Edición Limitada",
        "marca" => "Fender",
        "descripcion" => "Edición especial en colaboración con Blu DeTiger, perfecto para bajos funky y grooves.",
        "precio" => 1300.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "American Professional II Precision Bass",
        "marca" => "Fender",
        "descripcion" => "Bajo de alto rendimiento con diseño Precision clásico y mejoras modernas.",
        "precio" => 1700.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Player Plus Active Precision Bass",
        "marca" => "Fender",
        "descripcion" => "Bajo eléctrico activo con gran versatilidad de tonos y comodidad para tocar.",
        "precio" => 1250.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
];

foreach ($instrumentos as $instrumento) {
    $bean = R::dispense('instrumentos');

    foreach ($instrumento as $key => $value) {
        if ($key === 'marca') {
            $marca = R::findOne('marcas', 'nombre_marca = ?', [$value]);
            if (!$marca) {
                $marca = R::dispense('marcas');
                $marca->nombre_marca = $value;
                R::store($marca);
            }
            $bean->marca = $marca;
        } elseif ($key === 'categoria') {
            $categoria = R::findOne('categorias', 'nombre_categoria = ?', [$value]);
            if (!$categoria) {
                $categoria = R::dispense('categorias');
                $categoria->nombre_categoria = $value;
                R::store($categoria);
            }
            $bean->categoria = $categoria;
        } else {
            $bean->$key = $value;
        }
    }

    R::store($bean);
}

echo json_encode("ok");
