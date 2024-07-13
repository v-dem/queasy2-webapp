# [QuEasy PHP Framework v2](https://github.com/v-dem/queasy2-framework/) - Sample application

## Package `v-dem/queasy2-webapp`

QuEasy PHP Framework v2 sample application.

### Requirements

*   PHP version 7.1 or higher
*   SQLite

### Installation

    composer create-project --stability dev v-dem/queasy2-webapp

It will download and install project files, create SQLite database and make `logs` and `database` folders writable (666).
That's all. A good idea is to configure your web server to access web app at its `public` folder as website root, but it will work in any case.

> There is already a user "admin"/"gfhjkm" created, so you already can sign in.

