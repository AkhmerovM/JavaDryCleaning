package ru.first.dryCleaning.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import ru.first.dryCleaning.service.UserDetailsServiceImpl;

@Controller
public class AuthController {
    private UserDetailsServiceImpl userDetailsService;

    @GetMapping ("login")
    public String login() {
        System.out.println(userDetailsService.listAll());
        return "auth/login";
    }

}