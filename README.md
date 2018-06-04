Symfony Standard Edition
========================

**WARNING**: This distribution does not support Symfony 4. See the
[Installing & Setting up the Symfony Framework][15] page to find a replacement
that fits you best.

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev env) - Adds code generation
    capabilities

  * [**WebServerBundle**][14] (in dev env) - Adds commands for running applications
    using the PHP built-in web server

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Instrucciones básicas
========================
Los ficheros que teneis que tocar son:
 * **app/Resources/views** - Aquí se tocaran las vistas, siempre que toqueis alguna que el nombre sea claro para poder 
     entender donde estais y al resto del grupo.
 
 * **app/config/routing** - Si creais una nueva vista tendreis que crear su ruta para luego definirla en el controlador 
     y que os pinte la vista.
     
 * **app/src/Controller** - Funcionalidad de la página, de esto me encargare yo casí de todo si teneis que tocar algo os
     lo indicare mas adelante.
     
 * **app/src/Entity** - Se estan haciendo mediante YML, lo cual si realizais cambios para añadir campos de una entidad teneis
     que tocar el archivo situado en (app/src/Resources/config/doctrine), ahí teneis que crear el nuevo campo y tendréis que
     usar estos comandos para llevar acabo los cambios:
     
     * php bin/console doctrine:generate:entity ---> generar la entidad y especificar que va a ser por yml no por annotation
     * php bin/console doctrine:generate:entities AppBundle --no-backup ---> crea las entidades desde el archivo yml 
     * php bin/console doctrine:schema:update --force ---> crea las entidades en la base de datos
     
     Si quereis modificar algun campo teneis que cambiarlo en ambas partes, en la entidad y en el archivo yml. 
     
 * **app/src/Form** - Se realizan y se les da el diseño a los formularios, no tendréis que tocar esto si no teneis que crear 
     formularios pero no esta mal hecharle un ojo.
     
 * **app/src/Repository** - Aquí se crean las consultas para sacar datos de la base de datos. Un ejemplo sería el siguiente:
     * Controller
     ```
     $this->getDoctrine()->getRepository(User::Class)->Usuarios();
     ```
     * Repository
     ```
     public function Usuario() 
     {
        $result = $this->getEntityManager()
                       ->createQuery('SELECT u.nombre
                                      FROM AppBundle:User u');
        
        return $result->getResult();
     }
     ```
  * **app/web** - Aquí teneis que insertar .css o .js pero que no se os olvide llamarlos en las plantillas con:
     ```
     <link rel="stylesheet" type="text/css" href={{ asset("css/style.css") }} />
     ```
     
 Si teneis alguna duda o no entendeis algo preguntarme.

 Actualizar base de datos: php bin/console doctrine:schema:update --force

Enjoy!

[1]:  https://symfony.com/doc/3.4/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.4/doctrine.html
[8]:  https://symfony.com/doc/3.4/templating.html
[9]:  https://symfony.com/doc/3.4/security.html
[10]: https://symfony.com/doc/3.4/email.html
[11]: https://symfony.com/doc/3.4/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html
[15]: https://symfony.com/doc/current/setup.html
