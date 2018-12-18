The restaurateur.app is a demonstration project for the Laravel Tenancy package [tenancy/tenancy](https://github.com/tenancy/tenancy) with production grade quality, it has three goals:

- First and foremost provide a background for writing future (or updating the current) documentation. The idea is to give you a story telling kind of documentation that moves you through the complete process of setting up a multi tenant SaaS app using tenancy.
- Collaboratively build and maintain a multi tenant app using Laravel Tenancy for educational purposes. The tenancy team will take the lead, but outside contributors are much appreciated and might lead to receiving partial ownership over the project.
- At least break even while running the app in production, possibly have a slight profit marge to use for the tenancy project.

---

Richard Magnate is an entrepreneur; he enjoys coming up with insane business ideas, like this one. One afternoon Richard was invited for dinner by Jordan Cook, who plays with food and owns a restaurant chain. While the most delicious food was being prepared the two found themselves in a heated discussion about how best to promote restaurants online.

At the end of the evening, satisfied by the amazing meal, lush wine and the company, they agreed that Richard would have a Software as a Service build to cover everything they discussed and Jordon would occasionally try it out. You wouldn't believe it, but they even shook hands on it.

By starting at the most basic functionality, these are the must have features from the restaurant owner perspective:

- Upload the restaurant logo and change color scheme.
- Show the current food menu, which can be changed by a restaurant employee.
- Visitors should be able to make a reservation from a form which will be send to a configured email address.

The must haves from the platform perspective:

- Show a landing page promoting the features.
- Sign up as a restaurateur to create one or more restaurant pages.
- Allow subscriptions per restaurateur limiting the number of restaurant pages per plan and allowing a trial of 30 days.

---

# Installation

> Please note you need a valid Spark (Aurelius) license of your own to work with this project.

```bash
composer install --prefer-dist --no-dev

php artisan spark:install --team-billing --force
php artisan migrate
php artisan storage:link
```

# Contributions

- Any feature worked on should be accompanied by:
    - An issue in this repository that describes the purpose of the feature,
    - A work in progress pull request for contributors to offer guidance.
- Contributions have to adhere to regular Laravel conventions.
- By contributing you accept that you agree these contributions are free to use for any purpose (MIT).

# License, rights of re-use

All code in this repository is licensed under MIT. You can use, re-use and sell it.
The visual files, including logos, and brand cannot be re-used inside your own projects.
