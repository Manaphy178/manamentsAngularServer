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
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "Teclado Portátil PSR-EW425",
        "marca" => "Yamaha",
        "descripcion" => "Teclado portátil PSR-EW425 de Yamaha, equipado con 76 teclas sensibles al tacto, más de 800 sonidos, y características educativas avanzadas como lecciones integradas y conectividad USB, ideal para principiantes y músicos en desarrollo.",
        "precio" => 350.0,
        "tipo" => "Electrónico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
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
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "GAIA 2",
        "marca" => "Roland",
        "descripcion" => "Sintetizador GAIA 2 de Roland, una potente herramienta para el diseño de sonido y la experimentación musical. Equipado con un motor de síntesis avanzado, este sintetizador es capaz de crear una amplia gama de sonidos, desde texturas ambientales hasta leads agresivos. Cuenta con un panel de control intuitivo con faders, perillas y botones iluminados para un flujo de trabajo rápido y creativo. Además, incluye polifonía mejorada, efectos integrados, y un teclado de 49 teclas sensibles al tacto, lo que lo convierte en una excelente opción tanto para estudios como para presentaciones en vivo.",
        "precio" => 800.0,
        "tipo" => "Electrónico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "GR-55",
        "marca" => "Roland",
        "descripcion" => "Sintetizador de guitarra GR-55 de Roland, un revolucionario procesador de guitarra que combina sintetización avanzada y modelado de amplificadores. Equipado con la tecnología COSM, este dispositivo permite transformar el sonido de tu guitarra en una amplia gama de timbres, desde emulaciones de instrumentos acústicos hasta complejos pads de sintetizador. Con 910 tonos diferentes, MIDI integrado, y capacidad para conectar una pastilla GK, es ideal tanto para guitarristas que desean expandir su paleta sonora como para músicos de estudio en busca de versatilidad.",
        "precio" => 1200.0,
        "tipo" => "Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
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
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "modwave module WAVETABLE SYNTHESIZER",
        "marca" => "Korg",
        "descripcion" => "Sintetizador de tablas de ondas con capacidades de modulación avanzadas, ideal para diseñadores de sonido.",
        "precio" => 900.00,
        "tipo" => "Sintetizador",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "opsix module ALTERED FM SYNTHESIZER",
        "marca" => "Korg",
        "descripcion" => "Sintetizador de síntesis FM alterada, perfecto para exploración sonora y diseño de tonos únicos.",
        "precio" => 950.00,
        "tipo" => "Sintetizador FM",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
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
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "CT-S200WE Casiotone",
        "marca" => "Casio",
        "descripcion" => "Sintetizador compacto y portátil, perfecto para principiantes y músicos en movimiento.",
        "precio" => 150.00,
        "tipo" => "Sintetizador portátil",
        "gamma" => "Baja",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
        "nombre_instrumento" => "CT-S100 Casiotone",
        "marca" => "Casio",
        "descripcion" => "Teclado compacto diseñado para principiantes, con funciones simples y facilidad de uso.",
        "precio" => 100.00,
        "tipo" => "Sintetizador portátil",
        "gamma" => "Baja",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Sintetizador",
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
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Les Paul Standard 60s - Bourbon Burst",
        "marca" => "Gibson",
        "descripcion" => "Guitarra eléctrica icónica con tono clásico y acabado en Bourbon Burst, perfecta para rock y blues.",
        "precio" => 2500.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Les Paul Supreme - Ebony, 3-Pickup",
        "marca" => "Gibson",
        "descripcion" => "Edición de lujo con 3 pastillas y un acabado elegante en Ebony, ideal para tonos versátiles.",
        "precio" => 3500.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Premium",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Les Paul Standard 60s Figured Top - Dark Purple Burst",
        "marca" => "Gibson",
        "descripcion" => "Versión moderna de la Les Paul con tapa figurada y acabado en Dark Purple Burst.",
        "precio" => 2700.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Les Paul Modern Figured - Cobalt Burst",
        "marca" => "Gibson",
        "descripcion" => "Diseño moderno con mejoras ergonómicas y acabado en Cobalt Burst.",
        "precio" => 2800.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "Adam Jones Les Paul Standard - Antique Silverburst",
        "marca" => "Gibson",
        "descripcion" => "Edición especial inspirada en el guitarrista de Tool, Adam Jones, con un acabado distintivo.",
        "precio" => 4000.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Edición Limitada",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "ES-335 - Dark Purple Burst",
        "marca" => "Gibson",
        "descripcion" => "Clásica guitarra semi-hueca, famosa por su versatilidad en jazz y blues.",
        "precio" => 3200.00,
        "tipo" => "Guitarra semi-hueca",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "ES-335 Figured - Sixties Cherry",
        "marca" => "Gibson",
        "descripcion" => "Versión con tapa figurada y acabado vintage en Sixties Cherry.",
        "precio" => 3300.00,
        "tipo" => "Guitarra semi-hueca",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "SG Standard '61 - Vintage Cherry",
        "marca" => "Gibson",
        "descripcion" => "Guitarra eléctrica con diseño SG clásico y tono icónico en acabado Vintage Cherry.",
        "precio" => 2200.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Thunderbird Bass - Tobacco Burst",
        "marca" => "Gibson",
        "descripcion" => "Bajo eléctrico con diseño icónico y tonos profundos, ideal para rock y metal.",
        "precio" => 1800.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Non-Reverse Thunderbird - Ebony",
        "marca" => "Gibson",
        "descripcion" => "Versión con diseño no reversible, acabado en Ebony y tonos versátiles.",
        "precio" => 1700.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Gene Simmons G2 Thunderbird - Ébano",
        "marca" => "Gibson",
        "descripcion" => "Edición especial diseñada en colaboración con Gene Simmons, perfecta para el escenario.",
        "precio" => 2100.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Edición Limitada",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Rex Brown Signature Thunderbird - Ébano",
        "marca" => "Gibson",
        "descripcion" => "Bajo de firma diseñado para el bajista de Pantera, Rex Brown.",
        "precio" => 2300.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Edición Limitada",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "Les Paul Junior Tribute DC Bass - Worn Ebony",
        "marca" => "Gibson",
        "descripcion" => "Bajo eléctrico compacto con un diseño clásico y tono contundente.",
        "precio" => 1500.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZES31",
        "marca" => "Ibanez",
        "descripcion" => "Guitarra eléctrica versátil y moderna, ideal para principiantes y profesionales.",
        "precio" => 450.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZES40",
        "marca" => "Ibanez",
        "descripcion" => "Modelo avanzado con características mejoradas para un tono excepcional.",
        "precio" => 550.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZES40L",
        "marca" => "Ibanez",
        "descripcion" => "Versión para zurdos de la AZES40, con el mismo diseño y calidad.",
        "precio" => 550.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZ2407F Prestige",
        "marca" => "Ibanez",
        "descripcion" => "Guitarra de alta gama de la serie Prestige, diseñada para la máxima precisión y confort.",
        "precio" => 2200.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZ2402 Prestige",
        "marca" => "Ibanez",
        "descripcion" => "Modelo de gama alta con construcción de precisión y componentes premium.",
        "precio" => 2100.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZ2402L Prestige",
        "marca" => "Ibanez",
        "descripcion" => "Guitarra Prestige para zurdos, diseñada para músicos exigentes.",
        "precio" => 2100.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Guitarra",
        "nombre_instrumento" => "AZ24027 Prestige",
        "marca" => "Ibanez",
        "descripcion" => "Guitarra de 7 cuerdas de la serie Prestige, perfecta para géneros pesados y técnicos.",
        "precio" => 2300.00,
        "tipo" => "Guitarra eléctrica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "EHB1500",
        "marca" => "Ibanez",
        "descripcion" => "Bajo eléctrico de cuerpo ergonómico, ideal para tocar durante largas sesiones.",
        "precio" => 1600.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "EHB1505",
        "marca" => "Ibanez",
        "descripcion" => "Bajo de 5 cuerdas con diseño moderno y electrónica avanzada.",
        "precio" => 1800.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "EHB1505MS",
        "marca" => "Ibanez",
        "descripcion" => "Versión multiescala del EHB1505, optimizada para mayor rango tonal.",
        "precio" => 1900.00,
        "tipo" => "Bajo eléctrico multiescala",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "EHB1506MS",
        "marca" => "Ibanez",
        "descripcion" => "Bajo de 6 cuerdas multiescala, perfecto para bajistas que buscan versatilidad.",
        "precio" => 2000.00,
        "tipo" => "Bajo eléctrico multiescala",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "EHB1265MS",
        "marca" => "Ibanez",
        "descripcion" => "Bajo multiescala con un diseño ergonómico y gran rango de tonos.",
        "precio" => 1700.00,
        "tipo" => "Bajo eléctrico multiescala",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Bajo",
        "nombre_instrumento" => "EHB1000",
        "marca" => "Ibanez",
        "descripcion" => "Bajo eléctrico de la serie EHB con diseño sin cabezal, ideal para portabilidad.",
        "precio" => 1400.00,
        "tipo" => "Bajo eléctrico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "6-Piece Performance Series Kit",
        "marca" => "DrumWorkshop",
        "descripcion" => "Set de batería de 6 piezas, parte de la serie Performance, conocida por su calidad y resonancia.",
        "precio" => 3200.00,
        "tipo" => "Batería acústica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "4-Piece Performance Series Kit",
        "marca" => "DrumWorkshop",
        "descripcion" => "Set de batería de 4 piezas, ideal para estudios y presentaciones en vivo.",
        "precio" => 2500.00,
        "tipo" => "Batería acústica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "DWe Drum Kit Bundle, 4-Piece",
        "marca" => "DrumWorkshop",
        "descripcion" => "Batería electrónica de 4 piezas, incluye todos los elementos esenciales para empezar.",
        "precio" => 1800.00,
        "tipo" => "Batería electrónica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "DWe Drum Kit Bundle, 5-Piece",
        "marca" => "DrumWorkshop",
        "descripcion" => "Batería electrónica de 5 piezas, perfecta para estudios y práctica en casa.",
        "precio" => 2000.00,
        "tipo" => "Batería electrónica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Design 4-Piece Kit, Limited",
        "marca" => "DrumWorkshop",
        "descripcion" => "Edición limitada de la serie Design, con un diseño exclusivo y componentes de alta calidad.",
        "precio" => 2700.00,
        "tipo" => "Batería acústica",
        "gamma" => "Edición Limitada",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "DWe Hi-Hat Cymbal, 14 inch",
        "marca" => "DrumWorkshop",
        "descripcion" => "Platillo de Hi-Hat de 14 pulgadas, diseñado para un sonido nítido y definido.",
        "precio" => 400.00,
        "tipo" => "Platillo",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "DWe Electronic Crash/Ride Cymbal 18 inch",
        "marca" => "DrumWorkshop",
        "descripcion" => "Platillo electrónico de 18 pulgadas, perfecto para setups híbridos.",
        "precio" => 350.00,
        "tipo" => "Platillo Electrónico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "DW DWe Electronic Cymbal Pack, 3-Piece",
        "marca" => "DrumWorkshop",
        "descripcion" => "Set de 3 platillos electrónicos, ideal para expandir kits electrónicos.",
        "precio" => 800.00,
        "tipo" => "Platillo Electrónico",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "DW DWe Electronic Cymbal Pack, 4-Piece",
        "marca" => "DrumWorkshop",
        "descripcion" => "Set de 4 platillos electrónicos, diseñado para mayor versatilidad en kits de batería.",
        "precio" => 1000.00,
        "tipo" => "Platillo Electrónico",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Design Maple Snare 6x14, Limited",
        "marca" => "DrumWorkshop",
        "descripcion" => "Caja de madera de arce de 6x14 pulgadas, edición limitada con un tono profundo.",
        "precio" => 500.00,
        "tipo" => "Caja",
        "gamma" => "Edición Limitada",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Design Series Maple Snare, 6x14",
        "marca" => "DrumWorkshop",
        "descripcion" => "Caja de la serie Design con un tono brillante y versátil.",
        "precio" => 450.00,
        "tipo" => "Caja",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Masterworks",
        "marca" => "Pearl",
        "descripcion" => "Batería de alta gama completamente personalizable, diseñada para ofrecer la máxima calidad sonora.",
        "precio" => 7000.00,
        "tipo" => "Batería acústica",
        "gamma" => "Premium",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Masters Maple Gum",
        "marca" => "Pearl",
        "descripcion" => "Set de batería de arce y goma, perfecto para un tono cálido y resonante.",
        "precio" => 4000.00,
        "tipo" => "Batería acústica",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Crystal Beat",
        "marca" => "Pearl",
        "descripcion" => "Batería transparente de acrílico, diseñada para destacar visual y sonoramente en el escenario.",
        "precio" => 3000.00,
        "tipo" => "Batería acústica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Decade Maple Artisan",
        "marca" => "Pearl",
        "descripcion" => "Set de batería artesanal de arce, perfecto para músicos que buscan un tono clásico.",
        "precio" => 2000.00,
        "tipo" => "Batería acústica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Decade Maple",
        "marca" => "Pearl",
        "descripcion" => "Batería versátil de arce, ideal para estudios y presentaciones en vivo.",
        "precio" => 1500.00,
        "tipo" => "Batería acústica",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Batería",
        "nombre_instrumento" => "Roadshow",
        "marca" => "Pearl",
        "descripcion" => "Set de batería para principiantes, incluye todo lo necesario para empezar a tocar.",
        "precio" => 800.00,
        "tipo" => "Batería acústica",
        "gamma" => "Baja",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Stave Craft",
        "marca" => "Pearl",
        "descripcion" => "Caja artesanal de alta gama, diseñada para ofrecer un tono profundo y resonante.",
        "precio" => 900.00,
        "tipo" => "Caja",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Sensitone",
        "marca" => "Pearl",
        "descripcion" => "Caja versátil con un tono brillante, ideal para todo tipo de géneros musicales.",
        "precio" => 600.00,
        "tipo" => "Caja",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Hybrid Exotic",
        "marca" => "Pearl",
        "descripcion" => "Caja de diseño híbrido con materiales exóticos, perfecta para músicos que buscan un sonido único.",
        "precio" => 750.00,
        "tipo" => "Caja",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "Effects Snares",
        "marca" => "Pearl",
        "descripcion" => "Caja diseñada para efectos especiales y sonidos únicos en el estudio o en vivo.",
        "precio" => 500.00,
        "tipo" => "Caja",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "UltraCast",
        "marca" => "Pearl",
        "descripcion" => "Caja de aluminio fundido, conocida por su proyección y potencia sonora.",
        "precio" => 650.00,
        "tipo" => "Caja",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "String Cajon Seguiriya Line, Indian Heartwood",
        "marca" => "Meinl",
        "descripcion" => "Cajón de la línea Seguiriya, hecho de Indian Heartwood, con cuerdas internas ajustables para un sonido flamenco auténtico.",
        "precio" => 350.00,
        "tipo" => "Cajón",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "String Cajon Fandago Line, Indian Heartwood, Tulip Poplar",
        "marca" => "Meinl",
        "descripcion" => "Cajón de la línea Fandago, construido con Indian Heartwood y Tulip Poplar para un tono cálido y profundo.",
        "precio" => 320.00,
        "tipo" => "Cajón",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "String Cajon Martinete Line, Brazilian Ironwood",
        "marca" => "Meinl",
        "descripcion" => "Cajón de la línea Martinete, fabricado con Brazilian Ironwood para una proyección potente y clara.",
        "precio" => 400.00,
        "tipo" => "Cajón",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "String Cajon Cantina Line Limba",
        "marca" => "Meinl",
        "descripcion" => "Cajón de la línea Cantina, hecho de Limba, ideal para tonos equilibrados y versátiles.",
        "precio" => 300.00,
        "tipo" => "Cajón",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "String Cajon Buleria Line, Mongoy",
        "marca" => "Meinl",
        "descripcion" => "Cajón de la línea Buleria, con acabado en Mongoy, proporciona un sonido profundo y resonante perfecto para flamenco.",
        "precio" => 370.00,
        "tipo" => "Cajón",
        "gamma" => "Alta",
        "estado" => "Nuevo"
    ],
    [
        "categoria" => "Percusión",
        "nombre_instrumento" => "String Cajon Cantina Line Brown Eucalyptus",
        "marca" => "Meinl",
        "descripcion" => "Cajón de la línea Cantina con acabado en Brown Eucalyptus, ofreciendo un sonido cálido y redondo.",
        "precio" => 330.00,
        "tipo" => "Cajón",
        "gamma" => "Media",
        "estado" => "Nuevo"
    ]
];

foreach ($instrumentos as $instrumento) {
    $bean = R::dispense('instrumentos');
    $bean->ventas = rand(1, 300);
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
