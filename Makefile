WP_THEME=website/wp-content/themes/smr

all:
clear
make css
make js
make html

install:
npm install -g jade
npm install -g stylus
npm install -g component
bash install.sh

html:
jade sources/views/index.jade -O website/

local-update:
`cat data/metalsmr_database.sql | sed 's/metalurgica-smr.com.ar/localhost\/metalurgica-smr/g' > data/local.sql`

css:
stylus sources/styles/style.styl -o $(WP_THEME)

js:
cd sources/javascript; make build; cp build/build.js ../../$(WP_THEME)/js/main.js

clean-js:
rm -fr sources/javascript/build sources/javascript/components sources/javascript/template.js

ftp-push:
clear
make all
git ftp push -u {place-user} -p {place-password} ftp://{place-site-address}

stage-deploy:
git deploy stage
## tools/push-compiled

deploy:
git push origin master
make ftp-push

