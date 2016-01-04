<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title></title>

  <link href="/Ethan-wechat/Public/lib/ionic/css/ionic.css" rel="stylesheet">
  <link href="/Ethan-wechat/Public/css/style.css" rel="stylesheet">

    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
    <link href="css/ionic.app.css" rel="stylesheet">
  -->


  <!-- ionic/angularjs js -->
  <script src="/Ethan-wechat/Public/lib/ionic/js/ionic.bundle.js"></script>

  <!-- your app's js -->
  <script src="/Ethan-wechat/Public/js/app.js"></script>

<script type="text/javascript">
          angular.module('starter', ['ionic'])

          .run(function($ionicPlatform) {
            $ionicPlatform.ready(function() {
              // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
              // for form inputs)
              if(window.cordova && window.cordova.plugins.Keyboard) {
                cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
              }
              if(window.StatusBar) {
                StatusBar.styleDefault();
              }
            });
          })

          .controller( 'actionsheetCtl',['$scope','$ionicActionSheet','$timeout' ,function($scope,$ionicActionSheet,$timeout){
              $scope.show = function() {

                  var hideSheet = $ionicActionSheet.show({
                      // buttons: [
                      //   { text: '<b>Share</b> This' },
                      //   { text: 'Move' }
                      // ],
                      // destructiveText: 'Delete',
                      titleText: '评价成功',
                      cancelText: '确定',
                      cancel: function() {
                           // add cancel code..
						  hahaha
                         },
                      buttonClicked: function(index) {
                        return true;
                      }
                  });

                  $timeout(function() {
                      hideSheet();
                  }, 20000);

              };  
          }])
        </script>
	

</head>
<body  ng-app="starter" ng-controller="actionsheetCtl">
<div class="bar bar-header bar-positive">
	<a class="button icon button-icon ion-chevron-left"></a>
	<h1 class="title">我要评价</h1>
</div>
<div class="scroll-content has-header">
	<div class="item item-thumbnail-left">
	<img src="/Ethan-wechat/Public/img/rujia.jpg">
	<h2><i class="icon ion-social-yen"></i>120</h2>
	<p>介绍</p>
	</div>
	<div class="list">
	<div class="item item-body">
	<div class="row row-center">
	<div class="col col-20">
			<span>评分</span>
			</div>
			
			<div class="col">
			<img src="/Ethan-wechat/Public/img/star.png">
			</div>
	</div>
	
		<div class="item item-input item-floating-label">
		<textarea type="text" placeholder="请输入您的评论" cols="60" rows="4" ></textarea>
		</div>
	
	<!-- <div class="item item-body"> -->
	<div class="row">
		<div class="col col-33-center">
		<button class="button button-small button-outline ">
		<i class="icon ion-image"></i>
		上传图片
		</button>
		</div>
		<div class="col col-33">
		<img src="/Ethan-wechat/Public/img/rujia1.png">
		</div>
	</div>
	<!-- </div> -->
	</div>
<div class="padding">
<button class="button button-full button-positive"  ng-click="show()">
				提交评论
</button>
</div>
<div>
</body>
</html>