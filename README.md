# Laravel Anchor

Wrap docker management in a convenient Laravel package, just like Sail but with a different approach. Also make it usable in production. Laravel Sail is nice, but fails on one of the biggest promises of Docker: consistency between environments, a.k.a. build once, run everywhere. 


# Goals

- [ ] To enable all features in Laravel with the help of external services
  - [ ] [Broadcasting/Websockets](https://github.com/beyondcode/laravel-websockets)
  - [ ] [Development mail](https://github.com/mailhog/MailHog)
  - [x] [Queues](https://redis.io/)
  - [ ] [Task scheduling](https://hub.docker.com/r/willfarrell/crontab)
  - [ ] Scout
- [ ] To configure this package with just a config file
- [ ] To support multiple environments with different services (e.g. xDebug in development)
- [ ] To create smaller images than Sail by using Alpine based Linux images
- [ ] Let's Encrypt support
- [ ] docker-sync on Mac host


# Documentation

https://thomasmoors.github.io/anchor/
