<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');
$doc = JFactory::getDocument();
$dontInclude = array(
'/media/jui/js/jquery.min.js',
'/media/system/js/caption.js',
'/media/system/js/html5fallback.js',
'/media/jui/js/jquery-migrate.min.js',
'/media/jui/js/jquery-noconflict.js',
'/media/system/js/core-uncompressed.js',
'/media/system/js/tabs-state.js',
'/media/system/js/core.js',
'/media/system/js/mootools-core.js',
'/media/jui/js/bootstrap.min.js',
'/media/jui/js/bootstrap.js',
'/media/system/js/multiselect.js',
'/media/jui/js/chosen.jquery.min.js'
);

foreach($doc->_scripts as $key => $script){
    if(in_array($key, $dontInclude)){
        unset($doc->_scripts[$key]);
    }
}
unset($this->_styleSheets[JURI::root(true).'/media/jui/css/chosen.css']);

JHtml::_('stylesheet', 'bootstrap.min.css', array('relative' => true));
JHtml::_('stylesheet', 'font-awesome.min.css', array('relative' => true));
JHtml::_('stylesheet', 'agency.min.css', array('relative' => true));
/*JHtml::_('script', 'jquery.min.js', array('relative' => true));
JHtml::_('script', 'bootstrap.min.js', array('relative' => true));
JHtml::_('script', 'jquery.easing.min.js', array('relative' => true));
JHtml::_('script', 'jqBootstrapValidation.js', array('relative' => true));
JHtml::_('script', 'contact_me.js', array('relative' => true));
JHtml::_('script', 'agency.min.js', array('relative' => true));

*/
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- jQuery -->
   
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/#page-top">Guru OSC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<jdoc:include type="modules" name="main-menu" style="none" />
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
	 <header>
		<div class="header-media">
			<jdoc:include type="modules" name="main-header" style="none" />
		</div>
		<div class="header-title">
			<jdoc:include type="modules" name="main-header-title" style="none" />
		</div>	
    </header>
	<?php if ($this->countModules('services')) : ?>
	 <!-- Services Section -->
		 <section id="services">
			<div class="container">
				<jdoc:include type="modules" name="services" style="none" />
			</div>
		</section>
	<?php endif; ?>
   
	<main id="content" role="main" >
		
		
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	

	</main>
           
    <?php if ($this->countModules('portfolio')) : ?>
	 <!-- Services Section -->
		<section id="portfolio" class="bg-light-gray text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Portfolio</h2>
						<h3 class="section-subheading text-muted">Let's check out our recent projects.</h3>
					</div>
				</div>
				<jdoc:include type="modules" name="portfolio" style="none" />
			</div>
		</section>
	<?php endif; ?> 

   
	<?php if ($this->countModules('history')) : ?>
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">This is our roadmap.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
						<jdoc:include type="modules" name="history" style="none" />
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<?php endif; ?> 
	<?php if ($this->countModules('team')) : ?>
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Let's check our skills.</h3>
					
					
                </div>
            </div>
			<div class="row">
				<jdoc:include type="modules" name="team" style="none" />
				
			</div>
            
           
        </div>
    </section>
	<?php endif; ?> 
	<?php if ($this->countModules('client')) : ?>
    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
			<jdoc:include type="modules" name="client" style="none" />
        </div>
    </aside>
	<?php endif; ?> 
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Feel free to contact us if you need any information.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright © Guru Outsourcing Company 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                   Powered by <a href="https://onecard.vn/" target="_blank">OneCard.vn</a>
                </div>
            </div>
        </div>
    </footer>

  

     <!-- jQuery -->
    <script src="<?php echo $this->baseurl.'templates/'.$this->template?>/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->baseurl.'templates/'.$this->template?>/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo $this->baseurl.'templates/'.$this->template?>/js/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="<?php echo $this->baseurl.'templates/'.$this->template?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo $this->baseurl.'templates/'.$this->template?>/js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="<?php echo $this->baseurl.'templates/'.$this->template?>/js/agency.min.js"></script>

  
</body></html>