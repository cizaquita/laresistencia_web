<?php

/* user_welcome_inactive.txt */
class __TwigTemplate_58551ff16afe85c9ea55a02150a109ba08a56c4c9be49a73086c14fd7e8fab65 extends Twig_Template
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
        echo "Subject: Bienvenido a \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Por favor, guarda este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

URL del Sitio: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Por favor, visita el siguiente enlace para activar tu cuenta:

";
        // line 15
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada.
En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.

Gracias por registrarse.

";
        // line 22
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  46 => 15,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: Bienvenido a "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Por favor, guarda este email para futuras referencias. La información de tu cuenta es la siguiente:*/
/* */
/* ----------------------------*/
/* Nombre de usuario: {USERNAME}*/
/* */
/* URL del Sitio: {U_BOARD}*/
/* ----------------------------*/
/* */
/* Por favor, visita el siguiente enlace para activar tu cuenta:*/
/* */
/* {U_ACTIVATE}*/
/* */
/* Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada.*/
/* En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.*/
/* */
/* Gracias por registrarse.*/
/* */
/* {EMAIL_SIG}*/
/* */
