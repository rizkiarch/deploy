<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Admin-katalog';
$string['availablelangs'] = 'Tillgängliga språkpaket';
$string['chooselanguagehead'] = 'Välj ett språk';
$string['chooselanguagesub'] = 'Vänligen välj ett språk för installationen. Du kommer att ha möjlighet att välja språk för webbplatsen och användarna på en senare skärm.';
$string['clialreadyconfigured'] = 'Filen <em>config.php</em> finns redan. Använd <code>admin/cli/install_database.php</code> för att installera Moodle på denna server.';
$string['clialreadyinstalled'] = 'Filen <code>config.php</code> finns redan. Vänligen använd <code>admin/cli/upgrade.php</code> om du vill uppgradera Moodle på den här webbplatsen.';
$string['cliinstallheader'] = 'Kommandoradsbaserat installationsprogram för Moodle {$a}';
$string['clitablesexist'] = 'Databastabellerna finns redan. CLI-installationen kan inte fortsätta.';
$string['databasehost'] = 'Databasserver';
$string['databasename'] = 'Namn på databas';
$string['databasetypehead'] = 'Välj drivrutin för databasen';
$string['dataroot'] = 'Datakatalog';
$string['datarootpermission'] = 'Behörigheter för datakataloger';
$string['dbprefix'] = 'Prefix för tabeller';
$string['dirroot'] = 'Moodle-katalog';
$string['environmenthead'] = 'Kontrollerar miljön...';
$string['environmentsub2'] = 'Varje Moodleversion har ett lägsta PHP-versionskrav samt krav på ett antal obligatoriska PHP-tillägg.
En fullständig kontroll av miljön görs före varje installation och uppgradering. Kontakta serveradministratören om du inte vet hur du installerar en ny version eller aktiverar PHP-tillägg.';
$string['errorsinenvironment'] = 'Kontrollen av miljön misslyckades';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Språket "{$a}" gick tyvärr inte att ladda ner. Installationen kommer att fullföljas på engelska.';
$string['memorylimithelp'] = '<p>PHP-minnesgränsen för servern är för närvarande inställd på {$a}.</p>

<p>Detta kan leda till att Moodle får minnesproblem senare, särskilt om du har många moduler aktiverade och/eller många användare.</p>

<p>Vi rekommenderar att du konfigurerar PHP med en högre gräns om möjligt, till exempel 40M.
   Det finns flera sätt som du kan prova att göra detta på:</p>
<ol>
<li>Om du kan, kompilera om PHP med <code>--enable-memory-limit</code>.
    Detta gör det möjligt för Moodle att själv ställa in minnesgränsen.</li>
<li>Om du har tillgång till din php.ini fil kan du ändra <code>memory_limit</code>
    inställningen till t.ex. 40M.  Om du inte har åtkomst kan du be administratören göra detta åt dig.</li>
<li>På vissa PHP-servrar kan du skapa en HTACCESS-fil i Moodle-katalogen
    som innehåller denna rad:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Dock kan detta för vissa servrar resultera i att <b>alla</b> PHP-sidor slutar fungera (du får felmeddelande då du försöker visa dem). I dessa fall behöver du ta bort .htaccess-filen.</p></li>
</ol>';
$string['paths'] = 'Sökvägar';
$string['pathserrcreatedataroot'] = 'Installationsprogrammet kan inte skapa datakatalogen <code>{$a->dataroot}</code>.';
$string['pathshead'] = 'Bekräfta sökvägar';
$string['pathsrodataroot'] = 'Det går inte att skriva till dataroot-katalogen.';
$string['pathsroparentdataroot'] = 'Överliggande katalog ({$a->parent}) är inte skrivbar. Installationsprogrammet kan inte skapa dataroot-katalogen ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Ett fåtal webbhotell använder <var>/admin</var> som en speciell URL för att ge möjlighet att komma åt en
kontrollpanel eller liknande. Tyvärr står detta i konflikt med standardplatsen för Moodle-administratörssidorna.  Du kan åtgärda detta genom att
byta namn på administratörskatalogen i installationen och ange det nya namnet här. Till exempel: <var>moodleadmin</var>. Detta kommer att korrigera administratörslänkarna i Moodle.';
$string['pathssubdataroot'] = '<p>En katalog där Moodle lagrar allt filinnehåll som laddas upp av användare.</p>
<p>Den här katalogen ska vara både skriv- och läsbar av webbserveranvändaren (vanligtvis "www-data", "nobody" eller "apache").</p>
<p>Den får inte vara direkt tillgängligt över internet.</p>
<p>Om katalogen inte finns kommer installationsprogrammet försöka skapa den.</p>';
$string['pathssubdirroot'] = '<p>Fullständig sökväg till katalogen som innehåller Moodle-koden.</p>';
$string['pathssubwwwroot'] = '<p>Den fullständiga webadressen där Moodle finns, dvs. adressen som användarna kommer att ange i adressfältet i sin webbläsare för att komma åt Moodle.</p>
<p>Det går inte att komma åt Moodle med flera adresser. Om din webbplats är tillgänglig via flera adresser väljer du den enklaste och ställer in en permanent omdirigering för var och en av de andra adresserna.</p>
<p>Om webbplatsen är tillgänglig både från Internet och från ett internt nätverk (kallas ibland intranät) använder du den publika adressen här.</p>
<p>Om den aktuella adressen inte är korrekt ändrar du URL:en i webbläsarens adressfält och startar om installationen.</p>';
$string['pathsunsecuredataroot'] = 'Platsen för dataroot är inte säker';
$string['pathswrongadmindir'] = 'Admin-katalogen saknas';
$string['phpextension'] = '{$a} PHP-tillägg';
$string['phpversion'] = 'PHP-version';
$string['phpversionhelp'] = '<p>Moodle kräver minst PHP-version 5.6.5 eller 7.1 (7.0.x har vissa motorbegränsningar).</p>
<p>Du använder för närvarande version {$a}.</p>
<p>Du måste uppgradera PHP eller flytta till en server med en nyare version av PHP.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Du ser denna sida eftersom installationen av <strong>{$a->packname} {$a->packversion}</strong>-paketet lyckades.';
$string['welcomep30'] = 'Den här versionen av <strong>{$a->installername}</strong> innehåller program för att skapa en miljö där <strong>Moodle</strong> kommer att fungera, nämligen:';
$string['welcomep40'] = 'I paketet ingår även <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Användningen av alla applikationer i detta paket regleras av deras respektive licenser. Det fullständiga <strong>{$a->installername}</strong>-paketet är baserat på <a href="https://www.opensource.org/docs/definition_plain.html">öppen källkod</a> och distribueras under <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>-licens.';
$string['welcomep60'] = 'Följande sidor leder dig genom några enkla steg för att konfigurera och installera <strong>Moodle</strong> på din dator. Du kan acceptera standardinställningarna eller, alternativt, modifiera dem för att passa dina egna behov.';
$string['welcomep70'] = 'Klicka på "Nästa" här nedan för att fortsätta installationen av <strong>Moodle</strong>.';
$string['wwwroot'] = 'Webbadress';
