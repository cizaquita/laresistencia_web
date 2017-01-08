<?php

/* topic_notify.txt */
class __TwigTemplate_b40773a5d1972723fa4b6da420d9e0e67626573919a97c91aceaa5c1dab55041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Subject: Notificación de respuesta al tema - \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Hola ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Estás recibiendo esta notificación porque sigues el tema \"";
        // line 5
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\" de \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\".
Este tema ha recibido una respuesta";
        // line 6
        if (((isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null) !== "")) {
            echo " por ";
            echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        }
        echo " desde tu última visita.
Siguiendo este enlace puedes ver esa respuesta, no se enviarán más notificaciones hasta que visites ese tema.

Si quieres ver los nuevos mensajes desde tu última visita, haz clic en el siguiente enlace:
";
        // line 10
        echo (isset($context["U_NEWEST_POST"]) ? $context["U_NEWEST_POST"] : null);
        echo "

Si quieres ver el tema, haz clic en el siguiente enlace:
";
        // line 13
        echo (isset($context["U_TOPIC"]) ? $context["U_TOPIC"] : null);
        echo "

Si quieres ver el foro, haz clic en el siguiente enlace:
";
        // line 16
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

Si no quieres seguir más ese tema puedes hacer clic en \"Cancelar suscripción al tema\" cuando estés allí, o bien siguiendo este enlace:

";
        // line 20
        echo (isset($context["U_STOP_WATCHING_TOPIC"]) ? $context["U_STOP_WATCHING_TOPIC"] : null);
        echo "

";
        // line 22
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  65 => 20,  58 => 16,  52 => 13,  46 => 10,  36 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* Subject: Notificación de respuesta al tema - "{TOPIC_TITLE}"*/
/* */
/* Hola {USERNAME},*/
/* */
/* Estás recibiendo esta notificación porque sigues el tema "{TOPIC_TITLE}" de "{SITENAME}".*/
/* Este tema ha recibido una respuesta<!-- IF AUTHOR_NAME !== '' --> por {AUTHOR_NAME}<!-- ENDIF --> desde tu última visita.*/
/* Siguiendo este enlace puedes ver esa respuesta, no se enviarán más notificaciones hasta que visites ese tema.*/
/* */
/* Si quieres ver los nuevos mensajes desde tu última visita, haz clic en el siguiente enlace:*/
/* {U_NEWEST_POST}*/
/* */
/* Si quieres ver el tema, haz clic en el siguiente enlace:*/
/* {U_TOPIC}*/
/* */
/* Si quieres ver el foro, haz clic en el siguiente enlace:*/
/* {U_FORUM}*/
/* */
/* Si no quieres seguir más ese tema puedes hacer clic en "Cancelar suscripción al tema" cuando estés allí, o bien siguiendo este enlace:*/
/* */
/* {U_STOP_WATCHING_TOPIC}*/
/* */
/* {EMAIL_SIG}*/
/* */
