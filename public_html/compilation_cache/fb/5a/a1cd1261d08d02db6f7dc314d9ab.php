<?php

/* index.html */
class __TwigTemplate_fb5aa1cd1261d08d02db6f7dc314d9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
<html lang=\"ru\" style=\"max-height: 1000000px; -webkit-text-size-adjust: none; -moz-text-size-adjust: none; -ms-text-size-adjust: none;\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=1180, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>Html mail</title>
\t<link rel=\"stylesheet\" href=\"css/fonts.css\">
</head>
<body style=\"line-height: 1;\">
";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "</body>
</html>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <section style=\"width:900px; height:2600px; background-color:#455175; margin:0 auto; display: block;\">
\t\t<div style=\"min-width:640px; width:640px; margin:0 auto;\">
\t\t    <p style=\"position:relative; font-size:36px; color:#fff; top:40px;\">ИнитПро</p>
\t\t\t<nav style=\"position:relative; display: block; top:-35px;\">\t\t\t
\t\t\t        <a style=\"position:relative; font-size:14px; color:#fff; top:22px; left:310px; padding-right:20px;\" href=\"\">Как начать учавствовать в торгах?</a>
                    <a style=\"position:relative; font-size:14px; color:#fff; top:22px; left:310px;\" href=\"\">Тарифы</a>
                    <a style=\"position:relative; font-size:14px; color:#fff; top:22px; left:310px; \tpadding-left:20px;\" href=\"\">Вход</a>\t\t\t\t\t\t\t
                </nav>\t
\t\t    <div style=\"position:relative; width:640px; height:655px; background-color:#fff; top:50px;\">
\t\t\t    ";
        // line 20
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_info_);
        foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
            // line 21
            echo "\t\t\t    <p style=\"position:relative; line-height: 1.3 ;left:20px; top:35px;\"><strong>";
            if (isset($context["inf"])) { $_inf_ = $context["inf"]; } else { $_inf_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_inf_, "name_client"), "html", null, true);
            echo "</strong>, добрый день,<br>
                   Напоминаем, что доступ к системе поиска тендеров заканчивается <strong>31.05.2016</strong></p>
\t\t\t    <p style=\"position:relative; font-size:26px; left:200px; top:30px;\">Популярные тарифы</p>
\t\t\t\t<div style=\"float:left; position:relative; width:185px; height:245px; border-top:1px solid #e3e6ee; border-bottom:1px solid #e3e6ee; border-left:1px solid #e3e6ee;top:45px; left:25px;\">
\t\t\t\t    <div style=\"width:150px; margin-left:15px; font-size:20px; text-align:center; color:#455175; padding-top:30px; padding-bottom:20px; border-bottom:1px solid #e3e6ee;\">Стандарт 6</div>
\t\t\t\t\t<div style=\"width:150px; margin-left:15px; font-size:16px; text-align:center; padding-top:20px; padding-bottom:20px; border-bottom:1px solid #e3e6ee;\">10 900</div>
\t\t\t\t\t<div style=\"font-size:16px; text-align:center; padding-top:20px; padding-bottom:20px;\">6 месяцев</div>
\t\t\t\t\t<input type=\"submit\" value=\"Заказать\" style=\"position:relative; height:45px; width:150px; border-radius:20px; background-color:#455175; color:#fff; left:18px; outline: none;\">
\t\t\t\t</div>
\t\t\t\t<div style=\"float:left; position:relative; width:210px; height:275px; border:1px solid #e3e6ee; top:30px; left:25px;\">
\t\t\t\t    <div style=\"width:150px; margin-left:28px; font-size:20px; text-align:center;color:#455175; padding-top:30px; padding-bottom:20px; border-bottom:1px solid #e3e6ee;\">Стандарт 12</div>
\t\t\t\t\t<div style=\"width:150px; margin-left:28px; font-size:16px; text-align:center; padding-top:20px; padding-bottom:20px; border-bottom:1px solid #e3e6ee;\">19 900</div>
\t\t\t\t\t<div style=\"font-size:16px; text-align:center; padding-top:20px; padding-bottom:20px;\">12 месяцев</div>
\t\t\t\t\t<input type=\"submit\" value=\"Заказать\" style=\"position:relative; height:45px; width:150px; border-radius:20px; background-color:#455175; color:#fff; left:28px; top:25px; outline: none;\">
\t\t\t\t</div>
\t\t\t\t<div style=\"float:left; position:relative; width:185px;height:245px; border-top:1px solid #e3e6ee;border-bottom:1px solid #e3e6ee; border-right:1px solid #e3e6ee; top:45px;left:25px;\">
\t\t\t\t    <div style=\"width:150px; margin-left:15px; font-size:20px; text-align:center; color:#508d27; padding-top:30px; padding-bottom:20px; border-bottom:1px solid #e3e6ee;\">Победитель</div>
\t\t\t\t\t<div style=\"width:150px; margin-left:15px; \tfont-size:16px; text-align:center; padding-top:20px; padding-bottom:20px; border-bottom:1px solid #e3e6ee;\">29 900</div>
\t\t\t\t\t<div style=\"font-size:16px; text-align:center; padding-top:20px; padding-bottom:20px;\">12 месяцев</div>
\t\t\t\t\t<input type=\"submit\" value=\"Заказать\" style=\"position:relative; height:45px; width:150px; border-radius:20px; background-color:#508d27; color:#fff; left:18px; outline: none;\">
\t\t\t\t</div>
\t\t\t<div style=\"float:left; position:relative; font-size:14px; left:110px; top:60px;\">Если вы уже продлили договор - можете проигнорировать это письмо.</div>
\t\t\t<div style=\"float:left; position:relative; font-size:14px; top:90px; left:-390px; line-height: 0.3;\">
\t\t\t\t<p style=\"padding-bottom:10px;\"><strong>C уважением,</strong> </p>
\t\t\t\t<p><strong>";
            // line 45
            if (isset($context["inf"])) { $_inf_ = $context["inf"]; } else { $_inf_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_inf_, "name_manager"), "html", null, true);
            echo "</strong></p>
\t\t\t\t<p>";
            // line 46
            if (isset($context["inf"])) { $_inf_ = $context["inf"]; } else { $_inf_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_inf_, "post_manager"), "html", null, true);
            echo "</p>
\t\t\t\t<p>ООО \"ИнитГрупп\"</p>
\t\t\t\t<p>сот.";
            // line 48
            if (isset($context["inf"])) { $_inf_ = $context["inf"]; } else { $_inf_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_inf_, "phone_manager"), "html", null, true);
            echo "</p>
\t\t\t\t<p>т.(342) 259-48-55</p>
\t\t\t\t<p>";
            // line 50
            if (isset($context["inf"])) { $_inf_ = $context["inf"]; } else { $_inf_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_inf_, "mail_manager"), "html", null, true);
            echo "</p>
\t\t\t\t<p>www.initpro.ru</p>
\t\t\t</div>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "\t\t\t
\t\t\t</div>
\t\t\t<footer style=\"width:640px; height:600px; display: block;\">
\t\t        <div style=\" position:relative; width:640px; height:280px;top:60px;\">
\t\t\t\t   <img src=\"../img/footer_bgw.png\" alt=\"footer_bgw\">
\t\t\t\t   <p style=\"position:relative; font-size:26px; color:#fff; text-align:center; top:-270px;\">Подробные инструкции</p>
\t\t\t\t\t<p style=\"position:relative; font-size:16px; color:#fff; text-align:center; line-height: 1.1; top:-260px;\">Мы продолжаем совершенствовать наш сервис, постоянно улучшая<br>
\t\t\t\t\t                                                                                                           эффективность работы с ним. Поэтому мы создали место, где вы можете<br> посмотреть, как работает
\t\t\t\t\t\t\t\t\t\t\t                                                                                   та или иная функция, какие настройки существуют<br>  и что для этого нужно сделать.</p>
\t\t\t\t    <input type=\"submit\" value=\"Справочный центр\" style=\"position:relative; width:180px; height:50px; color:#fff; background-color:#508d27; border-radius:5px; top:-240px; left:230px; outline: none;\">
\t\t\t\t</div>
\t\t\t\t<div style=\"position:relative; width:640px; height:120px; border-bottom:1px solid #fff; top:50px; background-color:#455175;\">
\t\t\t\t<p style=\"position:relative; color:#fff; font-size:14px; text-align:center; line-height: 1.2; top:10px;\">Остались вопросы или нужна помощь с настройкой?<br>
                   Закажите обратный звонок нашим специалистам</p>
\t\t\t\t <input type=\"submit\" value=\"Обратный звонок\" style=\"position:relative; width:150px; height:35px; color:#fff; background-color:#455175; border-radius:5px; top:20px; left:245px; outline: none;\">   
\t\t\t\t</div>
\t\t\t\t<a style=\"position:relative; color:#fff; top:55px; left:165px; text-decoration:none; border-bottom:1px dashed #fff;\"href=\"\">Нажмите здесь, чтобы отписаться от рассылки</a>\t\t
\t\t    </footer>
        </div>
        </style>\t\t
    </section>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  103 => 50,  97 => 48,  91 => 46,  86 => 45,  57 => 21,  52 => 20,  41 => 11,  38 => 10,  33 => 75,  31 => 10,  20 => 1,);
    }
}
