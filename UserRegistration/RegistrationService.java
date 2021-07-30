package com.example.demo.UserRegistration;

import com.example.demo.UserInfo.UserInfo;
import com.example.demo.UserInfo.UserLogin;
import com.example.demo.UserInfo.UserRole;
import lombok.AllArgsConstructor;
import org.springframework.stereotype.Service;

@Service
@AllArgsConstructor
public class RegistrationService {

    private final UserLogin userLogin;
    private final EmailValidation emailValidation;

    String register(RegistrationRequest request) {
        boolean isValidEmail = emailValidation.test(request.getEmail());

        if(!isValidEmail) {
            throw new IllegalStateException("email not valid");
        }

        return userLogin.signUpUser(new UserInfo(
                request.getFirstName(),
                request.getLastName(),
                request.getEmail(),
                request.getPassword(),
                request.getHomeAddress(),
                UserRole.USER));

    }

}