<form action="POST">
    <?php if(isset($templateParams["erroresignup"])): ?>
        <p><?php echo $templateParams["erroresignup"]; ?></p>
    <?php endif; ?>
    <div class="mb-2 mt-5">
        <input type="text" class="form-control username-input" placeholder="Username" />
        <img src="../icons/user-solid.svg" alt="User icon" class="img-user" />
        <input type="email" class="form-control email-input" placeholder="Email" />
        <img src="../icons/envelope-open-solid.svg" alt="Email Icon" class="img-email" />
    </div>
    <div class="mb-3">
        <input type="password" class="form-control password-input" placeholder="Password" id="password" oninput="passwordStrengthChecker()"/>
        <img src="../icons/key-solid.svg" alt="Password Icon" class="img-password" />
        <i class="fas fa-exclamation-circle exclamation-icon" id="exclamation-circle"></i>
        <p class="password-strength-status" id="password-strength-status"></p> 
        <img src="../icons/signup/eye-regular.svg" class="password-visibility" id="password-visibility" alt="Password-visibility" onclick="toggleVisibility()" />
    </div>
    
    <div class="mb-3">
        <input type="password" class="form-control password-reinput" placeholder="Confirm Password" id="confirm-password" oninput="passwordMatching()"/>
        <img src="../icons/signup/eye-regular.svg" class="password-visibility-confirmation" id="password-visibility-confirmation" alt="Password-visibility-confirmation" onclick="toggleVisibilityConfirmation()" />
        <img src="../icons/unlock-alt-solid.svg" alt="Passowrd Confirmation Icon" class="img-password-confirmation" />
        <i class="fas fa-exclamation-circle exclamation-confirmation-icon" id="exclamation-circle-confirmation"></i>
    </div>

    <input type="submit" class="btn btn-signup mt-3 bm-3" value="Sign up" />
</form>