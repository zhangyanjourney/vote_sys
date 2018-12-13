<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<form action="" method="post" class="we7-form" id="js-sms-sign" ng-controller="SmsSignCtrl" ng-cloak>
	<div class="form-group">
		<label for="" class="control-label col-sm-2"  style="width: 150px;">注册/绑定短信签名设置</label>
		<div class="form-controls col-sm-8">
			<select class="we7-select" ng-model="site_sms_sign.register">
				<option value="" ng-selected="site_sms_sign.register == ''">请选择短信签名</option>
				<option ng-repeat="row in all_signatures" value="{{row}}" ng-bind="row" ng-selected="site_sms_sign.register == row"></option>
			</select>

			<span class="help-block">请选择短信签名。未审核签名可以通过云短信审核签名</span>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-sm-2"  style="width: 150px;">找回密码短信签名设置</label>
		<div class="form-controls col-sm-8">
			<select class="we7-select" ng-model="site_sms_sign.find_password">
				<option value="" ng-selected="site_sms_sign.find_password == ''">请选择短信签名</option>
				<option ng-repeat="row in all_signatures" value="{{row}}" ng-bind="row" ng-selected="site_sms_sign.find_password == row"></option>
			</select>

			<span class="help-block">请选择短信签名。未审核签名可以通过云短信审核签名</span>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="control-label col-sm-2"  style="width: 150px;">用户过期短信签名设置</label>
		<div class="form-controls col-sm-8">
			<select class="we7-select" ng-model="site_sms_sign.user_expire">
				<option value="" ng-selected="site_sms_sign.user_expire == ''">请选择短信签名</option>
				<option ng-repeat="row in all_signatures" value="{{row}}" ng-bind="row" ng-selected="site_sms_sign.user_expire == row"></option>
			</select>

			<span class="help-block">请选择短信签名。未审核签名可以通过云短信审核签名</span>
		</div>
	</div>
	<button type="button" class="btn btn-primary" ng-click="saveSms()" ng-style="{'padding': '6px 50px'}">确定</button>
</form>
<script>
	angular.module('systemApp').value('config', {
		'all_signatures' : <?php echo !empty($cloud_sms_signs) ? json_encode($cloud_sms_signs) : 'null'?>,
		'site_sms_sign' : <?php echo !empty($setting_sms_sign) ? json_encode($setting_sms_sign) : 'null'?>,
		'links' : {
			'site_sms_sign_link' : "<?php  echo url('cloud/sms-sign/save_sms_sign')?>"
		}
	});
	angular.bootstrap($('#js-sms-sign'), ['systemApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>