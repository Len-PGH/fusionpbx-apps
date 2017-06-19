#!/bin/sh

#clone fusionpbx-apps repo
read -p "Git clone fusionpbx-apps? (y/n): " clone_fusionpbx_apps

if [ .$clone_fusionpbx_apps = ."y" ]; then
cd /usr/src && git clone https://github.com/fusionpbx/fusionpbx-apps.git
 [ ..$clone_fusionpbx_apps = ."n" ];

fi

stage1() {
while true;do
    read -p "Add Apps? (yes/no/exit) " yno
    case $yno in
        [Yy]*) stage2;;
        [Nn]*) continue;;
        [Ee]*) exit 0;;
            *) echo "Done";;

    esac
done
}

stage2() {

#Apps to add
read -p 'This is a list of available apps to add: bdr, bulk_account_settings, domain_counts, help, invoices, languages, schemas, sms, webrtc, xmpp, zoiper: ' app_question 

if [ .$app_question = .'bdr' ]; then
cp -r /usr/src/fusionpbx-apps/bdr/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'bulk_account_settings' ]; then
cp -r /usr/src/fusionpbx-apps/bulk_account_settings/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'domain_counts' ]; then
cp -r /usr/src/fusionpbx-apps/domain_counts/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'invoices' ]; then
cp -r /usr/src/fusionpbx-apps/invoices/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'languages' ]; then
cp -r /usr/src/fusionpbx-apps/apps_languages/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'schemas' ]; then
cp -r /usr/src/fusionpbx-apps/apps_schemas/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'sms' ]; then
cp -r /usr/src/fusionpbx-apps/sms/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'webrtc' ]; then
cp -r /usr/src/fusionpbx-apps/webrtc/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'xmpp' ]; then
cp -r /usr/src/fusionpbx-apps/xmpp/ /var/www/fusionpbx/app/
fi

if [ .$app_question = .'zoiper' ]; then
cp -r /usr/src/fusionpbx-apps/zoiper/ /var/www/fusionpbx/app/
fi

sudo chown -R www-data:www-data /var/www/fusionpbx/app/
echo 'done'

while true;do
    read -p "Install another app? " yesno
    case $yesno in
        [Yy]* ) stage1;;
        [Nn]* ) exit 0;;
        * ) echo "Try Again ";;
    esac
done

}
stage1

exit 0
