<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BaoRu
 */

?>
<?php get_header(); ?>
    <section class="advantages" id="advantages">
      <div class="container">
        <div class="row">
          <h2 class="advantages-h">Преимущества</h2> 
        </div>
        <div class="row" id="slideshowAdvantages">
          <div class="slide">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/big-im-1.png"  class="img-responsive slide-img">
            </div>
            <div class="slide-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <span>Бизнес-мышление</span>
              <p>Фокусируемся не только на изготовлении продукта, который будет привлекательным, но и на создании эффективных, мощных  инструментов для продвижения бизнеса наших заказчиков. Углубляемся во все бизнес-процессы клиентов, чтобы наш вклад в развитие был максимальным.</p>
            </div>
          </div>
          <div class="slide">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/big-im-2.png"  class="img-responsive">
            </div>
            <div class="slide-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <span>Стратегический фокус</span>
              <p>Мы учитываем систему, принцип и цели бизнеса клиента. Поэтому создаем не просто эстетичный продукт, но и сверхмощное оружие для развития.</p>
            </div>
          </div>
          <div class="slide">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/big-im-3.png"  class="img-responsive">
            </div>
            <div class="slide-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <span>Гибкость</span>
              <p>Динамичное развитие и есть – успех. Точно знаем, как не только приспособиться к изменениям, но и извлечь из них выгоду для клиента.</p>
            </div>
          </div>
          <div class="slide">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/big-im-4.png"  class="img-responsive">
            </div>
            <div class="slide-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <span>Краудсорсинг</span>
              <p>Сотрудничая со Специалистами разных областей по всему миру, мы создаем непревзойденную команду, чтобы вложить в развитие вашего бизнеса только лучшие идеи и получить совершенный результат.</p>
            </div>
          </div>
          <div class="slide">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <img src="<?php echo get_template_directory_uri(); ?>/img/big-im-5.png"  class="img-responsive">
            </div>
            <div class="slide-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <span>Эффективная система</span>
                <p>Объединяя грамотный сайт с профессионально настроенной контекстной рекламой, получаем результат с первого дня работы.</p>
            </div>
          </div>
        </div>  
        <div class="row slider-control">
          <div class="col-lg-offset-3 col-lg-1 col-md-offset-3 col-md-1 col-sm-offset-3 col-sm-1 col-xs-offset-1 col-xs-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/im-1.png" alt="im-1" class="img-responsive control-1">
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/im-2.png" alt="im-2" class="img-responsive control-2">
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/im-3.png" alt="im-3" class="img-responsive control-3">
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/im-4.png" alt="im-4" class="img-responsive control-4">
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/im-5.png" alt="im-5" class="img-responsive control-5">
          </div>
        </div>
      </div>
    </section>
    <section class="services" id="services">
      <div class="container">
        <div class="row ">
          <h2 class="services-h">Услуги</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">
              <div class="example serv-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/design.png">
                <span>Design</span>
                <p>Проектирование<br>пользовательских<br>веб-интерфейсов</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">
              <div class="example serv-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/dev.png">
                <span>Development</span>
                <p>Разрабатываем<br>сайт компании</p>
              </div>
            </a>
          </div>  
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
             <a href="#send-form" class="services-a">
              <div class="example serv-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/seo.png">
                <span>Seo</span>
                <p>Продвигаем сайты<br>в поисковых системах</p>
              </div>
             </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">  
              <div class="example serv-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/landing.png">
                <span>Landing Page</span>
                <p>Создаем<br>целевую страницу</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">
              <div class="example serv-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/adve.png">
                <span>Advertising</span>
                <p>Рекламируем сайт<br>согласно контексту</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">
              <div class="example serv-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/market.png">
                <span>Marketing</span>
                <p>Разрабатываем<br>digital стратегию</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">
              <div class="example serv-7">
                <img src="<?php echo get_template_directory_uri(); ?>/img/online-store.png">
                <span>Online Store</span>
                <p>Создаем<br>интернет-магазин</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#send-form" class="services-a">
              <div class="example serv-8">
                <img src="<?php echo get_template_directory_uri(); ?>/img/smm.png">
                <span>SMM</span>
                <p>Продвигаем<br>в социальных сетях</p>
              </div>
             </a>
          </div>
        </div>
      </div>
    </section>
    <section class="works" id="works">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Работы</h2>
          </div>
        </div>
        <div class="row" id="slideshowWorks">
          <div class="work-slide">
            <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-6 work">
                <img src="<?php echo get_template_directory_uri(); ?>/img/work-1.png" alt="work" class="img-responsive center-block work-img">
                <div class="work-name hidden-md hidden-sm hidden-xs">
                  <p>cellmobile.com.ua</p>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-6 work">
                <img src="<?php echo get_template_directory_uri(); ?>/img/work-2.png" alt="work" class="img-responsive center-block work-img">
                <div class="work-name hidden-md hidden-sm hidden-xs">
                  <p>edupath.com</p>
                </div>
            </div>
          </div>
          <div class="work-slide">
            <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-6 work">
                <img src="<?php echo get_template_directory_uri(); ?>/img/work-3.png" alt="work" class="img-responsive center-block work-img">
                <div class="work-name hidden-md hidden-sm hidden-xs">
                  <p>rubengalarreta.com</p>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-6 work">
                <img src="<?php echo get_template_directory_uri(); ?>/img/work-4.png" alt="work" class="img-responsive center-block work-img">
                <div class="work-name hidden-md hidden-sm hidden-xs">
                  <p>grovelabs.io</p>
                </div>
            </div>
          </div>
          <div class="work-slide">
            <div class="col-lg-offset-1 col-lg-5 col-sm-6 col-xs-6 work">
                <img src="<?php echo get_template_directory_uri(); ?>/img/work-5.png" alt="work" class="img-responsive center-block work-img">
                <div class="work-name hidden-md hidden-sm hidden-xs">
                  <p>airbrushmakeup.com</p>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-6 work">
                <img src="<?php echo get_template_directory_uri(); ?>/img/work-6.png" alt="work" class="img-responsive center-block work-img">
                <div class="work-name hidden-md hidden-sm hidden-xs">
                  <p>lyft.com</p>
                </div>
            </div>
          </div>
        </div>
        <div class="row work-slider">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <i></i>
              <i></i>
              <i></i>
            </div>
        </div>
      </div>
    </section>
    <section class="send-form" id="send-form">
      <div class="container send-form-animate">
        <span>Начните работу с нами уже сегодня!</span>
        <p>Пишите нам, рассказывайте о своем бизнесе и идеях. Мы все изучим, свяжемся с Вами и детально обсудим проект. Для оперативной связи, звоните по телефону: +38 (068) 98 44 688</p>
        <form  id="form" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
              <input type="text" name="my-name" placeholder="Введите ваше имя" required>
              <input type="email" name="email" placeholder="E-mail" pattern="1*( atext / "." ) "@" ldh-str 1*( "." ldh-str )" required>
              <input type="tel" name="mobile" placeholder="Контактный телефон"required>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 center-block">
              <textarea name="text-mail" placeholder="Опишите вашу задачу:"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-12">
              <input type="submit" name="send" value="Отправить запрос" class="center-block">
            </div>
          </div>
        </form>
      </div>
    </section>
<?php get_footer(); ?>


