<style>
		.brand-logo img {
			width:130px;
		}
</style>
<ul>
    <li menu-toggle="" path="/apps" name="My Profile" icon="md md-camera" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MyProfile" aria-expanded="false" aria-controls="MyProfile" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-camera"></i>&nbsp;My Profile</a>
  <ul id="MyProfile" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
        <li menu-link="" href="userprofile" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="userprofile.php"><span class="ng-scope">
        User Profile
      </span></a>
</li>
<!--<li menu-link="" href="userverification" name="User Verification" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="verification_process.php"><span class="ng-scope">
        Verification Center
      </span></a>
</li>-->
	   <!--<li menu-link="" href="messagechat" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="messagechat.php"><span class="ng-scope">
        Message &amp; Chat
      </span></a>
</li>
	   <li menu-link="" href="login" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="login.php"><span class="ng-scope">
        Login
      </span></a>
</li>-->
    </ul>
</li>
    <li menu-toggle="" path="/ui-elements" name="Personal Account" icon="md md-photo" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#PersonalAccount" aria-expanded="false" aria-controls="PersonalAccount" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-photo"></i>&nbsp;Personal Account</a>
  <ul id="PersonalAccount" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="GiveHelp" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="GiveHelp.php"><span class="ng-scope">Give Help</span></a>
</li>
      <li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="transaction.php"><span class="ng-scope">Transaction Statement</span></a>
</li>
<li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="payment_proof.php"><span class="ng-scope">Payment Proof</span></a>
</li>

<li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="payment_request.php"><span class="ng-scope">Payment Request</span></a>
</li>
<li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="dashboard.php"><span class="ng-scope">Account Status</span></a>
</li>
    </ul>
</li>
    <li menu-toggle="" path="/forms" name="MiRewards" icon="md md-input" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MiRewards" aria-expanded="false" aria-controls="MiRewards" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-input"></i>&nbsp;MiRewards</a>
  <ul id="MiRewards" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="bonuses.php"><span class="ng-scope">Bonuses</span></a>
</li>
      <li menu-link="" href="withdrawl" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="withdrawl.php"><span class="ng-scope">Bonuses Withdrawl</span></a>
</li>
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="downline.php"><span class="ng-scope">Downline</span></a>
</li>
    <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="testimonial.php"><span class="ng-scope">Testimonial Reward</span></a>
</li>
    </ul>
</li>
    <li menu-link="" href="#/support" icon="md md-favorite-outline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="support.php"><i class="md md-favorite-outline"></i>&nbsp;<span class="ng-scope">Support Desks</span><div class="ripple-wrapper"></div></a>
</li>
    
  </ul>