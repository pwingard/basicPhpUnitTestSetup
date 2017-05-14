
place in file composer.json

{
    "require-dev": {
        "phpunit/phpunit": "^5.5"
    },
    "autoload": {
        "psr-4": {
            "TDD\\": "src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "TDD\\Test\\": "tests/"
        }
    }
}

in terminal at web root run composer install

include src and tests folder