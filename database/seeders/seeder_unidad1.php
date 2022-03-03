<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class seeder_unidad1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tema 1
        DB::table('unidadi')->insert([

            'id' => 1,
            'titulo' => '<h1>RECONOCER LOS CONCEPTOS DE SISTEMAS DE INFORMACIÓN</h1>',
            'contenido' => 'Un sistema de información es un conjunto de elementos que interactúan entre sí con el fin de apoyar las actividades de una empresa o negocio.
                            Las tres partes fundamentales de un sistema de procesamiento electrónico de datos son el sistema de computación, el sistema de numeración y el sistema Operativo
            <h1>Componentes del sistema de información</h1>
                            Un Sistema de Información realiza cuatro actividades básicas: almacenamiento, procesamiento y salida de información. A continuación, se definirán cada una de estas actividades: 
            <ul>
                <li>*Entrada de Información</li>
                <li>*Almacenamiento de información</li>
                <li>*Procesamiento de Información</li>
                <li>*Salida de Información</li>
            </ul>',
            'imagen' => '<img src="images/aboutus/tema1.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        //Tema 2
        DB::table('unidadi')->insert([
            'id' => 2,
            'titulo' => '<h1>RECONOCER LA EVOLUCIÓN DE LOS SISTEMAS DE INFORMACIÓN</h1>',
            'contenido' => 'Un sistema de información es una combinación de procesos, hardware, personal capacitado, software, infraestructura y estándares que están diseñados para crear, modificar, almacenar, administrar y distribuir información para sugerir nuevas estrategias comerciales y nuevos productos.
            Conduce a prácticas de trabajo eficientes y una comunicación efectiva para tomar mejores decisiones en una organización. Ha habido una evolución significativa de la función del sistema de información en las últimas décadas.
            La evolución de la función del sistema de información se puede resumir de la siguiente manera:

                <table class="table table-striped">
              <thead>
                    <tr>
                        <th>1950 - 1960</th>
                        <th>1960 - 1970</th>
                        <th>1970 - 1980</th>
                        <th>1980 - 1990</th>
                        <th>1950 - 1960</th>
                        <th>1990 - 2000</th>
                        <th>2000 - presente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Procesamiento de datos</td>
                        <td>Informes de gestión</td>
                        <td>Apoyo a las decisiones</td>
                        <td>Apoyo a las decisiones</td>
                        <td>Apoyo Ejecutivo</td>
                        <td>Conocimiento administrativo</td>
                        <td>E-Business</td>
            
                    </tr>
                </tbody>
            </table>',
            'imagen' => '<img src="images/aboutus/tema2.png" class="margin-bottom" alt="">',

            'created_at' => now(),

            'updated_at' => now()
        ]);    
        //Tema 3
        DB::table('unidadi')->insert([

            'id' => 3,
            'titulo' => '<h1>DEFINIR LOS CONCEPTOS DE CLIENTE SERVIDOR</h1>',
            'contenido' => '<h4>TCP es un protocolo orientado a conexión. No hay relaciones maestro/esclavo. Las aplicaciones, sin embargo, utilizan un modelo cliente/servidor en las comunicaciones.</h4>
            <h4>Un servidor es una aplicación que ofrece un servicio a usuarios de Internet; un cliente es el que pide ese servicio. Una aplicación consta de una parte de servidor y una de cliente, que se pueden ejecutar en el mismo o en diferentes sistemas.</h4>
            <h4>Los usuarios invocan la parte cliente de la aplicación, que construye una solicitud para ese servicio y se la envía al servidor de la aplicación que usa TCP/IP como transporte.</h4>
            <h4>El servidor es un programa que recibe una solicitud, realiza el servicio requerido y devuelve los resultados en forma de una respuesta. Generalmente un servidor puede tratar múltiples peticiones (múltiples clientes) al mismo tiempo.</h4>',
            'imagen' => '<img src="images/aboutus/tema3.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
            //Tema 4
        DB::table('unidadi')->insert([
            'id' => 4,
            'titulo' => '<h1>DEFINIR LOS CONCEPTOS DE COMPUTADORAS CENTRALES Y DEDICADAS</h1>',
            'contenido' => '<h4>Una computadora central o mainframe es una computadora grande, potente y costosa usada principalmente por una gran compañía para el procesamiento de una gran cantidad de datos; por ejemplo, para el procesamiento de transacciones bancarias.</h4>
            <h4>La capacidad de una computadora central se define tanto por la velocidad de su CPU como por su gran memoria interna, su alta y gran capacidad de almacenamiento externo, sus resultados en los dispositivos E/S rápidos y considerables, la alta calidad de su ingeniería interna que tiene como consecuencia una alta fiabilidad y soporte técnico caro, pero de alta calidad. </h4>
            <h4>Una computadora central puede funcionar durante años sin problemas ni interrupciones y las reparaciones de este pueden ser realizadas mientras está funcionando. </h4>
            <h4>Los vendedores de computadoras centrales ofrecen servicios especiales; por ejemplo, si se rompe la computadora, el vendedor ejecutará las aplicaciones de su cliente en sus propias computadoras sin que los usuarios lo noten mientras que duran las reparaciones. </h4>
            <h4>La independencia interna de estas computadoras es tan grande que, por lo menos, en un caso conocido, los técnicos pudieron cambiar las computadoras centrales de sitio desmontándolas pieza a pieza y montándolas en otro lugar, dejando, mientras tanto, dichas computadoras funcionando; en este ejemplo, el cambio de las computadoras centrales de un sitio a otro se produjo de manera transparente.</h4>
            <h4>A menudo, las computadoras centrales soportan miles de usuarios de manera simultánea que se conectan mediante terminal como el centro de operaciones de muchos terminales virtuales, puede ofrecer la potencia necesaria para que dichas computadoras operen de manera eficiente, pero también la flexibilidad de las redes de computadoras personales.</h4>',
            'imagen' => '<img src="images/aboutus/tema4.png" class="margin-bottom" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 5
        DB::table('unidadi')->insert([
            'id' => 5,
            'titulo' => '<h1>DEFINIR LOS SISTEMAS DE CONEXION LIBRE Y A TRAVES DE REDES</h1>',
            'contenido' => '<h4>Son aquellos sistemas que mantienen a dos o más equipos unidos a través de algún medio de comunicación (físico o no), con el objetivo primordial de poder compartir los diferentes recursos hardware y software.
            Los sistemas operativos de red más ampliamente usados son: Novell Netware, LAN Manager, Windows Server, UNIX, Linux, LANtastic, Li, etc.
            </h4>
            <h4>Al igual que un equipo no puede trabajar sin un sistema operativo, una red de equi- pos no puede funcionar sin un sistema operativo de red. Si no se dispone de ningún equipo que monte un sistema operativo de red, no existirá una gestión centralizada de recursos, por lo que la red se convertirá en lo que hemos denominado grupo de trabajo.</h4>
            <h4>En un entorno de red podemos diferenciar claramente dos componentes:</h4>
            <ul>
                <li>1.- Clientes. Equipos normalmente configurados con sistemas operativos monopuesto, que se conectan y validan al servidor para poder empezar a trabajar en la red.</li>
                <li>2.- Servidores. Equipos configurados con operativos de red que proporcionan recursos a los clientes y el software de red del cliente permite que estos recursos estén disponibles para los equipos clientes. </li>
            </ul>',
            'imagen' => '<img src="images/aboutus/tema5.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 6
        DB::table('unidadi')->insert([
            'id' => 6,
            'titulo' => '<h1>DESCRIBIR LOS SISTEMAS DE ARQUITECTURA CLIENTE/SERVIDOR</h1>',
            'contenido' => '<h4>A fin de poder entender correctamente el comportamiento de la Arquitectura Web es importante describir el funcionamiento de la arquitectura de aplicaciones Cliente-Servidor.
            En Dicha arquitectura disponemos de dos tipos de agentes:
            </h4>
            <ul>
                <li>1.- Cliente: Ordenador o programa informático que solicita información.</li>
                <li>2.- Servidor: Ordenador o programa informático que dispone de información.</li>
            </ul>
            <h4>Pasos de intercambio de información	</h4>
            <ul>
                <li>1.	Lanzamiento de la petición desde el cliente en búsqueda de datos</li>
                <li>2.	Procesado de la petición por parte del servidor, para localizar la información</li>
                <li>3.	Envío de la respuesta por parte del Servidor al cliente, con los datos solicitados</li>
                <li>4.	Procesado en el cliente de los datos de la respuesta del servidor</li>
            </ul>
            <h4></h4>',
            'imagen' => '<img src="images/aboutus/tema6.png" class="margin-bottom" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 7
        DB::table('unidadi')->insert([
            'id' => 7,

            'titulo' => '<h1>RECONOCER PROTOCOLOS DE COMUNICACION EN RED</h1>',

            'contenido' => '<h4>Los protocolos de red son estándares y políticas formales, conformados por restricciones, procedimientos y formatos que definen el intercambio de paquetes de información para lograr la comunicación entre dos servidores o más dispositivos a través de una red.</h4>
            <h4>Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y recibidos. Algunos protocolos admiten el reconocimiento de mensajes y la compresión de datos diseñados para una comunicación de red confiable de alto rendimiento.</h4>
            <h4>Existen varios tipos de protocolos de red:</h4>
            
            <ul>
                <li>1.	Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</li>
                <li>2.	Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</li>
                <li>3.	Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</li>
            </ul>',
            'imagen' => '<img src="images/aboutus/tema7.png" class="img-responsive" alt="">',

            'created_at' => now(),

            'updated_at' => now()
        ]);
        //Tema 8
        DB::table('unidadi')->insert([
            'id' => 8,
            'titulo' => '<h1>CLASIFICAR LOS SISTEMAS DE INFORMACION DEACUERDO A SU ARQUITECTURA</h1>',
            'contenido' => '<h4>Los sistemas de información, de manera general se pueden clasificar de tres formas según sus propósitos generales, se clasifica los sistemas de información en tres tipos fundamentales: </h4>
            <h4>(1) Sistemas transaccionales; (2) Sistemas de Soporte a la Toma de Decisiones, Sistemas para la Toma de Decisión de Grupo, Sistemas Expertos de Soporte a la Toma de Decisiones y Sistema de Información para Ejecutivos y (3) Sistemas estratégicos.</h4>
            <table class="table table-striped">
              <thead>
                    <tr>
                        <th>Sistemas transaccionales: </th>
                        <th>Sistemas Estratégicos: </th>
                    </tr>
            </table>',
            'imagen' => '<img src="images/aboutus/tema8.png" class="margin-bottom" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 9
        DB::table('unidadi')->insert([
            'id' => 9,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE DIAGRAMACION DE COMPONENTES DE LA ARQUITECTURA CLIENTE/SERVIDOR</h1>',
            'contenido' => '<h4>Los diagramas de componentes UML representan las relaciones entre los componentes individuales del sistema mediante una vista de diseño estática. Pueden ilustrar aspectos de modelado lógico y físico.</h4>
            <h4>En el contexto del UML, los componentes son partes modulares de un sistema independientes entre sí, que pueden reemplazarse con componentes equivalentes. Son autocontenidos y encapsulan estructuras de cualquier grado de complejidad.</h4>
            <h4>Los elementos encapsulados solo se comunican con los otros a través de interfaces. Los componentes no solo pueden proporcionar sus propias interfaces, sino que también pueden utilizar las interfaces de otros componentes, por ejemplo, para acceder a sus funciones y servicios. A su vez, las interfaces de un diagrama de componentes documentan las relaciones y dependencias en una arquitectura de software.</h4>',
            'imagen' => '<img src="images/aboutus/tema9.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 10
        DB::table('unidadi')->insert([
            'id' => 10,
            'titulo' => '<h1>Componentes del modelo Cliente/Servidor</h1>',
            'contenido' => '<h4>En esta aproximación, y con el objetivo de definir y delimitar el modelo de referencia de una arquitectura Cliente/Servidor, se identifican cinco componentes que permitan articular dicha arquitectura, considerando que toda aplicación de un sistema de información está caracterizada por lo siguiente:</h4>,•	Presentación/Captación de la información.
            •	Procesos.
            •	Almacenamiento de la información.
            •	Puestos de trabajo
            •	Comunicaciones.
            ',
            'imagen' => '<img src="images/aboutus/tema10.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
         //Tema 11
         DB::table('unidadi')->insert([
            'id' => 11,
            'titulo' => '<h1>DEFINIR EL CONCEPTO DE PROGRAMA MAESTRO.</h1>',
            'contenido' => 'El Programa Maestro, conocido como Programa maestro, es un programa que muestra qué productos se fabricarán y especifica en qué cantidades se hará durante un período de tiempo.
            Se trata de un programa generado a partir de la desagregación de la planificación de la producción agregada, que se encargará de guiar las acciones de producción a lo largo de aproximadamente 6 a 12 meses normalmente sobre una base semanal, teniendo en cuenta los pedidos existentes.
            En otras palabras, el plan maestro es un programa que contiene todo lo que se va a producir y cuándo se va a producir.
            De esta manera, se definen las fechas de entrega de cada producto y se analiza cuántas unidades se pueden fabricar en un intervalo de tiempo determinado.
            Esto mantiene el orden y la organización operativa de toda la cadena de producción.',
            'imagen' => '<img src="images/aboutus/tema11.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 12
        DB::table('unidadi')->insert([
            'id' => 12,
            'titulo' => '<h1>EXPLICAR LOS PROCESOS Y TAREAS DEL PROGRAMA MAESTRO.</h1>',
            'contenido' => '<h4>Para tener éxito con el MPS, este debe ser dividido en unos pocos pasos básicos:</h4>,1. Previsión de la demanda
            El primer paso en MPS es hacer una previsión de la demanda, es decir, una previsión de las ventas en un período determinado ya sea a corto, medio y largo plazo,
            De esta manera la empresa puede tener una base que le indique cuánto necesitará producir.
            2. Planificación de la capacidad de producción
            Como su nombre indica, en esta etapa se hace una previsión de la capacidad de producción de la compañía a medio y largo plazo.',
            'imagen' => '<img src="images/aboutus/tema12.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
         //Tema 13
         DB::table('unidadi')->insert([
            'id' => 13,
            'titulo' => '<h1>DESCRIBIR LOS TIPOS DE SERVIDORES</h1>',
            'contenido' => '<h4>Debido a la inmensa expansión del Internet y los servicios digitales que necesita la sociedad para funcionar, los tipos de servidores han servido como procesadores de miles de datos como correos electrónicos, documentos de texto, audios, videos, imágenes, programas, servicios empresariales, bases de datos, y muchas más.</h4>,1. Servidor de email
            Uno de los más antiguos que encontraremos en esta lista. Funciona como una especie de oficina de correo para almacenar, recibir, enviar y permitir múltiples operaciones que tienen que ver con el correo personal de los clientes.
            2. Servidor web
            Un servidor web se ocupa de guardar la información en formato HTML de los sitios, donde se incluye texto, imágenes, videos y todo tipo de datos. Mediante un explorador web, los usuarios puedan visualizar todo esto en sus pantallas.
            3. Servidor de base de datos
            Son dispositivos diseñados para almacenar grandes cúmulos de información y poder gestionar los datos uno por uno.
            También son capaces de analizar, manipular y alojar los datos de acuerdo con los requerimientos del usuario.
            4. Servidores cloud
            Estos sirven para compañías que se dedican a rentar un espacio en sus servidores para que otras personas o empresas guarden la información de manera remota. Sirven para almacenar grandes cantidades de datos y así proteger la información de las organizaciones o personas naturales.
            5. Servidor DNS
            Están encargados de gestionar los nombres de los dominios de las páginas web. Es decir, su trabajo es crear un vínculo entre el dominio del sitio con su IP (un conjunto de números que identifica jerárquica y lógicamente una interfaz en red a un dispositivo).
            6. Servidor Telnet
            Utilizado principalmente en las telecomunicaciones, es un protocolo de red que le permite a los usuarios gestionar, enviar y recibir datos para solucionar problemas con las redes relacionadas con la telefonía.
            7. Servidor SIP
            Es conocido como Proxy SIP y su trabajo es establecer la conexión para llamadas telefónicas por Internet. El mismo no transmite audio ni video; únicamente almacenan la dirección IP para generar la comunicación con otro usuario.
            8. Servidor FTP
            Es un servidor que está conectado a Internet que permite la posibilidad de transferir archivos y datos entre otros ordenadores y servidores.
            9. Servidor del acceso remoto (RAS)
            Vigila las líneas de módem de los ordenadores u otros medios de comunicación de Internet, de manera tal que los requerimientos conecten con la red en forma remota, contesta llamadas e interviene la petición de la red.
            10. Servidor compartido
            Este servidor se usa para recibir requerimientos de muchos clientes. La única desventaja es que los usuarios del servidor compartido no pueden realizar muchas peticiones al mismo tiempo, ya que no es suficientemente rápido.
            ',
            'imagen' => '<img src="images/aboutus/tema13.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 14
        DB::table('unidadi')->insert([
            'id' => 14,
            'titulo' => '<h1>RECONOCER LAS CARACTERÍSTICAS DE LA ARQUITECTURA CLIENTE/SERVIDOR: SERVICIOS, RECURSOS COMPARTIDOS, PROTOCOLOS ASIMÉTRICOS, INDEPENDENCIA DE LA UBICACIÓN, COMPATIBILIDAD DE CLIENTES Y SERVIDORES, COMUNICACIÓN DE MENSAJES, ENCAPSULACIÓN DE SERVICIOS, ESCALABILIDAD E INTEGRIDAD.</h1>',
            'contenido' => '<h4>Recursos compartidos: Los recursos compartidos son recursos creados por defecto en la red en todos los sistemas basados en la Tecnología Windows. Estos recursos por defecto comparten cada unidad de disco en el sistema.
            Protocolos asimétricos: Protocolos asimétricos: hay una relación muchos a uno entre los clientes y un servidor. Los Clientes siempre inician un diálogo mediante la solicitud de un servicio. Los Servidores esperan pasivamente por las solicitudes de los clientes.</h4>',
            'imagen' => '<img src="images/aboutus/tema14.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
         //Tema 15
         DB::table('unidadi')->insert([
            'id' => 15,
            'titulo' => '<h1>IDENTIFICAR LAS VENTAJAS Y DESVENTAJAS DE LA ARQUITECTURA CLIENTE/SERVIDOR.</h1>',
            'contenido' => '<h4>Cliente-Servidor es uno de los estilos arquitectónicos distribuidos más conocidos, el cual está compuesto por dos componentes, el proveedor y el consumidor. El proveedor es un servidor que brinda una serie de servicios o recursos los cuales son consumido por el Cliente.
            En una arquitectura Cliente-Servidor existe un servidor y múltiples clientes que se conectan al servidor para recuperar todos los recursos necesarios para funcionar, en este sentido, el cliente solo es una capa para representar los datos y se detonan acciones para modificar el estado del servidor, mientras que el servidor es el que hace todo el trabajo pesado. Ventajas
            •	Centralización: El servidor fungirá como única fuente de la verdad, lo que impide que los clientes conserven información desactualizada.
            •	Seguridad: El servidor por lo general está protegido por firewall o subredes que impiden que los atacantes pueden acceder a la base de datos o los recursos sin pasar por el servidor.
            Desventajas
            •	Actualizaciones (clientes): Una de las complicaciones es gestionar las actualizaciones en los clientes, pues puede haber muchos terminales con el cliente instalado y tenemos que asegurar que todas sean actualizadas cuando salga una nueva versión.
            •	Concurrencia: Una cantidad no esperada de usuarios concurrentes puede ser un problema para el servidor, quien tendrá que atender todas las peticiones de forma simultánea, aunque se puede mitigar con una estrategia de escalamiento, siempre será un problema que deberemos tener presente.',
            'imagen' => '<img src="images/aboutus/tema15.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 16
        DB::table('unidadi')->insert([
            'id' => 16,
            'titulo' => '<h1> DEFINIR EL CONCEPTO DE CÓMPUTO EN LA NUBE.</h1>',
            'contenido' => '<h4>La computación en la nube (o cloud computing, en inglés) es una tecnología que permite acceder remotamente, de cualquier lugar del mundo y en cualquier momento, a softwares, almacenamiento de archivos y procesamiento de datos a través de Internet, sin la necesidad de conectarse a un ordenador personal o servidor local.</h4>',
            'imagen' => '<img src="images/aboutus/tema16.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 17
        DB::table('unidadi')->insert([
            'id' => 17,
            'titulo' => '<h1>DEFINIR LOS CONCEPTOS DE INFRASTRUCTURE AS A SERVICE (IAAS), PLATFORM AS A SERVICE (PAAS), SOFTWARE AS A SERVICE (SAAS).</h1>',
            'contenido' => '<h4>IAAS es uno de los cuatro tipos de servicios en la nube, junto con el software como servicio (SAAS), la plataforma como servicio (PAAS) y la tecnología sin servidor.</h4>, •	(IAAS) es un tipo de servicio de informática en la nube que ofrece recursos esenciales de proceso, almacenamiento y redes a petición que son de pago por uso.
            IAAS permite evitar el costo y la complejidad de comprar y administrar servidores físicos e infraestructura de centro de datos. Cada recurso se ofrece como un componente de servicio aparte, y usted solo paga por el tiempo que necesite un recurso concreto.
            •	Plataforma como servicio (PAAS) es un entorno de desarrollo e implementación completo en la nube, con recursos que permiten entregar todo, desde aplicaciones sencillas basadas en la nube hasta aplicaciones empresariales sofisticadas habilitadas para la nube. Usted le compra los recursos que necesita a un proveedor de servicios en la nube, a los que accede a través de una conexión segura a Internet, pero solo paga por el uso que hace de ellos., •	El software como servicio (SAAS) permite a los usuarios conectarse a aplicaciones basadas en la nube a través de Internet y usarlas.',
            'imagen' => '<img src="images/aboutus/tema17.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 18
        DB::table('unidadi')->insert([
            'id' => 18,
            'titulo' => '<h1>DESCRIBIR LA ARQUITECTURA  CLIENTE/SERVIDOR  CON LOS MODELOS DE CÓMPUTO EN LA NUBE IAAS, PAAS, SAAS.</h1>',
            'contenido' => '<h4>En términos generales, SaaS, PaaS y IaaS son las principales capas de prestación de servicios en la nube, donde SaaS significa Software como servicio, PaaS - Plataforma como servicio e IaaS - Infraestructura como servicio.
            Así que, básicamente, obtiene tres capas de servicios en la nube (software, plataforma e infraestructura) entregados como "servicio" por los proveedores de la nube.</h4>',
            'imagen' => '<img src="images/aboutus/tema18.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    
}
