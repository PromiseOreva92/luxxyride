<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet">-->
    </head>
    <body>
We are
a model that you like and receive, Our reputation is recognized among the best in the industry... 
We are 
here to give ur home that redefining taste and bedgasm        
    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        
                        
                        <div class="row" style="margin-top:15%;">
                            <div class="col-lg-12">
                                <div class="row" style="height:auto">
                                    <h4 class="col-sm-6" style="text-align: left;color: #FFD000;font-family: 'Raleway', sans-serif;font-weight: 200;font-size: 2.5em;">
                                        We are<br> 
                                        <span class="txt-rotate" data-period="1000" 
                                              data-rotate='[ "a model that you like and receive, Our reputation is recognized among the best in the industry",
                                              "here to give ur home that redefining taste and bedgasm"]'></span></h4>
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-6" style="text-align:left;padding-left: 60px;padding-top: 20px;">
                                        <a href="#team-area" class="btn btn-warning">Hire Vehicle</a>
                                        <a href="#choose-car" class="btn btn-primary">Lease Vehicle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
<script>
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};    
</script>

                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>
