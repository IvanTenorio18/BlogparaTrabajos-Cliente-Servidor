<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class unidad2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tema 1
        DB::table('unidadii')->insert([

            'id' => 1,
            'titulo' => '<h1>RECONOCER LOS CONCEPTOS DE PRESENTACIÓN DISTRIBUIDA, PRESENTACIÓN REMOTA, LÓGICA O PROCESO DISTRIBUIDO, ACCESO A DATOS REMOTOS Y BASES DE DATOS DISTRIBUIDAS.</h1>',
            'contenido' => '<h1>Presentación distribuida</h1>,
            La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.
            <h1>Presentación remota</h1>
            La capa de presentación de datos se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en el servidor.
            <h1>Proceso distribuido</h1>
            En este modelo, la capa que implementa la lógica de negocio se encuentra dividida entre el cliente y el servidor. El acceso a la base de datos se encuentra en el servidor y la capa de presentación en el cliente.
            <h1>Base de datos distribuida</h1>
            Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está distribuida entre el cliente y el servidor. Se requieren de mecanismos para asegurar la coherencia en los datos.

            ',
            'imagen' => '<img src="images/aboutus/tema1.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        //Tema 2
        DB::table('unidadii')->insert([

            'id' => 2,
            'titulo' => '<h1>DEFINIR LOS CONCEPTOS DE LÓGICA DE ACCESO, PRESENTACIÓN Y NEGOCIO A DATOS.</h1>',
            'contenido' => '•	Capa de presentación: la que ve el usuario (también se la denomina capa de usuario), presenta el sistema al usuario, le comunica la información y captura la información del usuario en un mínimo de proceso (realiza un filtrado previo para comprobar que no hay errores de formato). También es conocida como interfaz gráfica y debe tener la característica de ser amigable (entendible y fácil de usar) para el usuario. Esta capa se comunica únicamente con la capa de negocio.
            •	Capa de negocio: es donde residen los programas que se ejecutan, se reciben las peticiones del usuario y se envían las respuestas tras el proceso. Se denomina capa de negocio (e incluso de lógica del negocio) porque es aquí donde se establecen todas las reglas que deben cumplirse. Esta capa se comunica con la capa de presentación, para recibir las solicitudes y presentar los resultados, y con la capa de datos, para solicitar al gestor de base de datos almacenar o recuperar datos de él. También se consideran aquí los programas de aplicación.
            •	Capa de datos: es donde residen los datos y es la encargada de acceder a los mismos. Está formada por uno o más gestores de bases de datos que realizan todo el almacenamiento de datos, reciben solicitudes de almacenamiento o recuperación de información desde la capa de negocio.            
            ',
            'imagen' => '<img src="images/aboutus/tema2.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        //Tema 3
        DB::table('unidadii')->insert([

            'id' => 3,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE DESARROLLO DE LÓGICA DE ACCESO A DATOS, LÓGICA DE PRESENTACIÓN DE DATOS Y LÓGICA DE NEGOCIO O LÓGICA DE APLICACIÓN.</h1>',
            'contenido' => '•	El control de acceso lógico es la principal línea de defensa para la mayoría de los sistemas, permitiendo prevenir el ingreso de personas no autorizadas a su información. Para controlar el acceso se emplean 2 procesos: identificación y autenticación.
            Se denomina identificación al momento en que el usuario se da a conocer en el sistema; y autenticación a la verificación que realiza el sistema sobre esa identificación.
            Es más eficiente que los usuarios sean identificados y autenticados sólo una vez, pudiendo a partir de ahí acceder a todas las aplicaciones y datos a los que permita su perfil, tanto local como remotamente. Esto se denomina single login o sincronización de passwords.
            
            •	La capa de presentación está formada por la lógica de aplicación, que prepara datos para su envío a la capa de cliente y procesa solicitudes desde la capa de cliente para su envío a la lógica de negocios del servidor. La lógica en la capa de presentación está formada normalmente por componentes de J2EE como, por ejemplo, Java Servlet o los componentes de JSP que preparan los datos para enviarlos en formato HTML o XML, o que reciben solicitudes para procesarlas. Esta capa también puede incluir un servicio de portal que proporcione acceso personalizado y seguro a los servicios de negocios en la capa de servicios de negocio.
            
            •	La capa de servicios de negocio consiste en la lógica que realiza las funciones principales de la aplicación: procesamiento de datos, implementación de funciones de negocios, coordinación de varios usuarios y administración de recursos externos como, por ejemplo, bases de datos o sistemas heredados. Esta capa suele estar formada por componentes firmemente acoplados que se ajustan al modelo de componentes distribuidos de J2EE como, por ejemplo, los objetos Java, los componentes EJB o los beans conducidos mediante mensajes. 
            •	Capa de datos. La capa de datos está formada por los servicios que proporcionan los datos persistentes utilizados por la lógica de negocios. Los datos pueden ser datos de aplicaciones almacenados en un sistema de administración de bases de datos o pueden incluir información de recursos y directorios almacenada en un almacén de datos de protocolo ligero de acceso a directorios (LDAP). Los servicios de datos también pueden incluir alimentación de datos de orígenes externos o datos a los que se puede obtener acceso desde sistemas informáticos heredados.
            ',
            'imagen' => '<img src="images/aboutus/tema3.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        //// De aqui para abajo faltan las imagenes
        //Tema 4
        DB::table('unidadii')->insert([

            'id' => 4,
            'titulo' => '<h1>DEFINIR LOS CONCEPTOS DE LÓGICA DE ACCESO, PRESENTACIÓN Y NEGOCIO A DATOS.</h1>',
            'contenido' => '•	Capa de presentación: la que ve el usuario (también se la denomina capa de usuario), presenta el sistema al usuario, le comunica la información y captura la información del usuario en un mínimo de proceso (realiza un filtrado previo para comprobar que no hay errores de formato). También es conocida como interfaz gráfica y debe tener la característica de ser amigable (entendible y fácil de usar) para el usuario. Esta capa se comunica únicamente con la capa de negocio.
            •	Capa de negocio: es donde residen los programas que se ejecutan, se reciben las peticiones del usuario y se envían las respuestas tras el proceso. Se denomina capa de negocio (e incluso de lógica del negocio) porque es aquí donde se establecen todas las reglas que deben cumplirse. Esta capa se comunica con la capa de presentación, para recibir las solicitudes y presentar los resultados, y con la capa de datos, para solicitar al gestor de base de datos almacenar o recuperar datos de él. También se consideran aquí los programas de aplicación.
            •	Capa de datos: es donde residen los datos y es la encargada de acceder a los mismos. Está formada por uno o más gestores de bases de datos que realizan todo el almacenamiento de datos, reciben solicitudes de almacenamiento o recuperación de información desde la capa de negocio.            
            ',
            'imagen' => '<img src="images/aboutus/tema4.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        //Tema 5
        DB::table('unidadii')->insert([

            'id' => 5,
            'titulo' => '<h1>DEFINIR EL CONCEPTO DE NIVEL VINCULADO A PROGRAMACIÓN WEB.</h1>',
            'contenido' => 'Los servidores vinculados permiten que Motor de base de datos de SQL Server y Instancia administrada de Azure SQL lean datos de los orígenes de datos remotos y ejecuten comandos en los servidores de bases de datos remotos (por ejemplo, orígenes de datos OLE DB) fuera de la instancia de SQL Server. Los servidores vinculados normalmente se configuran para habilitar Motor de base de datos a fin de ejecutar una instrucción Transact-SQL que incluye las tablas de otra instancia de SQL Serveru otro producto de base de datos como Oracle. Muchos tipos de orígenes de datos OLE DB pueden configurarse como servidores vinculados, incluidos proveedores de bases de datos externos y Azure Cosmos DB.',
            'imagen' => '<img src="images/aboutus/tema5.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        //Tema 6
        DB::table('unidadii')->insert([

            'id' => 6,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE PLANIFICACIÓN EN DOS NIVELES.</h1>',
            'contenido' => 'Una forma más practica de manejar los procesos intercambiados a disco es el unos de un planificador de dos niveles. Primero se carga en memoria un subconjunto de los procesos ejecutables, luego, el planificador se limita a escoger procesos de este subconjunto durante cierto tiempo. Una vez efectuado el cambio, el planificador de bajo nivel otra vez se limita a ejecutar procesos que están en la memoria en ese momento, mientras el planificador de nivel superior se ocupa de trasladar procesos entre la memoria y el disco.',
            'imagen' => '<img src="images/aboutus/tema6.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        //Tema 7
        DB::table('unidadii')->insert([

            'id' => 7,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE PLANIFICACIÓN EN TRES NIVELES.</h1>',
            'contenido' => 'La planificación tiene 3 niveles el primero es el nivel estratégico, el segundo es el nivel programático y el tercero el nivel operativo.
            •	El nivel de Planificación Estratégica
            Facilita la construcción de la Visión, la Misión institucional y la elaboración de objetivos estratégicos. Exige a la organización precisa lo que quiere “Ser y Hacer” en el largo plazo.
            •	El nivel de Planificación Programática
            Establece y/o formula las estrategias y tácticas las cuales nos permitirán alcanzar los objetivos estratégicos. Es necesario destacar que el nivel programático se convierte en el puente que articula el nivel estratégico con el nivel operativo.
            •	El nivel de Planificación Operativa
            Establece con claridad las actividades y metas que se deben alcanzar en el corto plazo para garantizar el logro de los objetivos.
            ',
            'imagen' => '<img src="images/aboutus/tema7.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Tema 8
        DB::table('unidadii')->insert([

            'id' => 8,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE PLANIFICACIÓN MULTINIVELES.</h1>',
            'contenido' => 'Al hablar del desarrollo de aplicaciones Web resulta adecuado presentarlas dentro de las aplicaciones multinivel. Los sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los servidores. Además, está el problema de la actualización y el mantenimiento de las aplicaciones, ya que las modificaciones a la misma han de ser trasladada a todos los clientes. algoritmos de colas multinivel, pero permiten el movimiento de los trabajos de unas colas a otras.',
            'imagen' => '<img src="images/aboutus/tema8.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Tema 9
        DB::table('unidadii')->insert([

            'id' => 9,
            'titulo' => '<h1>IDENTIFICAR PROBLEMAS DE ACTUALIZACIÓN Y MANTENIMIENTO DE APLICACIONES MULTINIVEL.</h1>',
            'contenido' => 'Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de presentación, lógica de la aplicación y los datos. La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces 
            sin cambiar la lógica de la aplicación. La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de información como una base de datos o documentos XML. ',
            'imagen' => '<img src="images/aboutus/tema9.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Tema 10
        DB::table('unidadii')->insert([

            'id' => 10,
            'titulo' => '<h1>RECONOCER LOS CONCEPTOS DE MODELO, CONTROL Y VISTA, EN LAS ARQUITECTURAS CLIENTE/SERVIDOR.</h1>',
            'contenido' => '•	El modelo representa la parte de la aplicación que implementa la lógica de negocio
            Es responsable de la recuperación de datos convirtiéndolos en conceptos significativos para la aplicación, así como su procesamiento, validación, asociación y cualquier otra tarea.
            •	La vista hace una presentación de los datos.
            Es responsable del uso de la información de la cual dispone para producir cualquier interfaz de presentación de cualquier petición que se presente.
            •	La capa del Controlador
            La capa del controlador gestiona las peticiones de los usuarios. Es responsable de responder la información solicitada con la ayuda tanto del modelo como de la vista
            ',
            'imagen' => '<img src="images/aboutus/tema10.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Tema 11
        DB::table('unidadii')->insert([

            'id' => 11,
            'titulo' => '<h1>RECONOCER EL CONCEPTO DEL MODELO VISTA CONTROLADOR (MVC) EN LAS ARQUITECTURAS CLIENTE/SERVIDOR.</h1>',
            'contenido' => 'Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.
            Modelo-vista-controlador (MVC) es un patrón de arquitectura de software, que separa los datos y principalmente lo que es la lógica de negocio de una aplicación de su representación y el módulo encargado de gestionar los eventos y las comunicaciones. Para ello MVC propone la construcción de tres componentes distintos que son el modelo, la vista y el controlador, es decir, por un lado define componentes para la representación de la información, y por otro lado para la interacción del usuario.
            Este patrón de arquitectura de software se basa en las ideas de reutilización de código y la separación de conceptos, características que buscan facilitar la tarea de desarrollo de aplicaciones y su posterior mantenimiento.
            ',
            'imagen' => '<img src="images/aboutus/tema11.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 12
        DB::table('unidadii')->insert([

            'id' => 12,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE FLUJO DE CONTROL A PARTIR DEL MVC, EN LAS ARQUITECTURAS CLIENTE/SERVIDOR.</h1>',
            'contenido' => 'Flujo de control  
            1.	El usuario realiza una acción en la interfaz 
            2.	El controlador trata el evento de entrada  Previamente se ha registrado 
            3.	El controlador notifica al modelo la acción del usuario, lo que puede implicar un cambio del estado del modelo (si no es una mera consulta) 
            4.	Se genera una nueva vista. La vista toma los datos del modelo 
            El modelo no tiene conocimiento directo de la vista 
            5.	La interfaz de usuario espera otra interacción del usuario, que comenzará otro nuevo ciclo
            ',
            'imagen' => '<img src="images/aboutus/tema12.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 13
        DB::table('unidadii')->insert([

            'id' => 13,
            'titulo' => '<h1>DESCRIBIR EL DESARROLLO DE SOFTWARE A PARTIR DEL MVC, EN LAS ARQUITECTURAS CLIENTE/SERVIDOR.</h1>',
            'contenido' => '1.	El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón, enlace, etc.) 2.	El controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada por el usuario. El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback. 3.	El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión.',
            'imagen' => '<img src="images/aboutus/tema13.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 14
        DB::table('unidadii')->insert([

            'id' =>14,
            'titulo' => '<h1>DEFINIR EL CONCEPTO DE COMUNICACIÓN ORIENTADA A CONEXIÓN E INTERFAZ DE PROGRAMACIÓN DE APLICACIONES (API).</h1>',
            'contenido' => 'Una API o interfaz de programación de aplicaciones es un conjunto de definiciones y protocolos que se usa para diseñar e integrar el software de las aplicaciones.
            Las API permiten que sus productos y servicios se comuniquen con otros, sin necesidad de saber cómo están implementados. Esto simplifica el desarrollo de las aplicaciones y permite ahorrar tiempo y dinero. Las API le otorgan flexibilidad; simplifican el diseño, la administración y el uso de las aplicaciones; y ofrecen oportunidades de innovación, lo cual es ideal al momento de diseñar herramientas y productos nuevos (o de gestionar los actuales).',
            'imagen' => '<img src="images/aboutus/tema14.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 15
        DB::table('unidadii')->insert([

            'id' => 15,
            'titulo' => '<h1>EXPLICAR EL PROCESO DE COMUNICACIÓN Y CONFIGURACIÓN ORIENTADA A CONEXIÓN E INTERFAZ DE PROGRAMACIÓN DE APLICACIONES (API).</h1>',
            'contenido' => 'Puede pensar en un proceso API como un conjunto de reglas computacionales (el método) y herramientas de software (los bits prácticos) que administran qué, cuándo y cómo se comparte la información entre cada aplicación. La información en sí misma a menudo se denomina "recurso" y la conectividad que se logra comúnmente se denomina "integración".',
            'imagen' => '<img src="images/aboutus/tema15.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 16
        DB::table('unidadii')->insert([

            'id' => 16,
            'titulo' => '<h1>DEFINIR EL CONCEPTO DE SOCKETS.</h1>',
            'contenido' => 'Socket designa un concepto abstracto por el cual dos procesos (posiblemente situados en computadoras distintas) pueden intercambiar cualquier flujo de datos, generalmente de manera fiable y ordenada. Además, es una estructura de datos que permite que dos máquinas se comuniquen entre ellas.
            El término socket es también usado como el nombre de una interfaz de programación de aplicaciones (API) para la familia de protocolos de Internet TCP/IP, provista usualmente por el sistema operativo.',
            'imagen' => '<img src="images/aboutus/tema16.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //Tema 17
        DB::table('unidadii')->insert([

            'id' => 17,
            'titulo' => '<h1>EXPLICAR EL PROCESO DEL USO DE SOCKETS EN APLICACIONES CLIENTE/SERVIDOR.</h1>',
            'contenido' => 'Los sockets de servidor sincrónico suspenden la ejecución de la aplicación hasta que se recibe una solicitud de conexión en el socket. Los sockets de servidor sincrónico no son adecuados para las aplicaciones que hacen un uso intensivo de la red durante su funcionamiento, pero pueden ser adecuados para las aplicaciones de red simple.
            Una vez establecido un Socket para que escuche en un punto de conexión mediante los métodos Bind y Listen, estará listo para aceptar solicitudes de conexión entrantes mediante el método Accept. La aplicación se suspende hasta que se recibe una solicitud de conexión cuando se llama al método Accept.',
            'imagen' => '<img src="images/aboutus/tema17.2.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
