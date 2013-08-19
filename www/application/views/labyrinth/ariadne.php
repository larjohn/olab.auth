<?php
/**
 * Open Labyrinth [ http://www.openlabyrinth.ca ]
 *
 * Open Labyrinth is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Open Labyrinth is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Open Labyrinth.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright 2012 Open Labyrinth. All Rights Reserved.
 *
 */
?>
<div class="page-header">
        <?php
    if (isset($templateData['maps'])) {
    ?>

    <h1><?php echo __('Πρόγραμμα ΑΡΙΑΔΝΗ'); ?></h1>
</div>
    <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css"
      href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo URL::base(); ?>scripts/olab/dataTablesTB.js"></script>

<div class="row-fluid" style="text-align: justify">
    <p>
    Kαλώς ορίσατε στο ηλεκτρονικό περιβάλλον των εικονικών (ψηφιακών) ασθενών της Ιατρικής Σχολής του Α.Π.Θ.
<p></p>
    H Σχολή μας στην προσπάθειά της να ενσωματώσει στη σύγχρονη ιατρική εκπαίδευση τη μάθηση με βάση το πρόβλημα-κλινικό σενάριο και τις τελευταίες τεχνολογίες του διαδικτύου, ανάθεσε στην κ. Χαρίκλεια Χατζησεβαστού-Λουκίδου Καθηγήτρια Παιδιατρικής-Κλινικής Γενετικής, το καινοτόμο πρόγραμμα «ΑΡΙΑΔΝΗ» για το Ακαδημαϊκό έτος 2011-2012.
    <p></p>
    Η κ. Χαρίκλεια Χατζησεβαστού-Λουκίδου οργάνωσε, συντόνισε, κατηύθυνε επιστημονικά τα συμμετέχοντα μέλη ΔΕΠ και, σε συνεργασία με το Εργαστήριο Ιατρικής Πληροφορικής (υπεύθυνος: Επίκουρος Καθηγητής κ. Παναγιώτης Μπαμίδης), τα εκπαίδευσε στη χρήση των απαραίτητων προγραμμάτων/τεχνολογιών στο διαδίκτυο όπως αυτές προέκυψαν μέσα από το Ευρωπαϊκό Πρόγραμμα mEducator (www.meducator.net). Αποτέλεσμα ήταν η δημιουργία των πρώτων εικονικών ασθενών της Σχολής μας, που είναι ευρέως διαθέσιμοι στους φοιτητές μας.
    <p></p>
    Οι εικονικοί ασθενείς λοιπόν, απευθύνονται στο φοιτητή μας. Σκοπός σε αυτή τη φάση είναι: η αυτοαξιολόγηση των γνώσεών του, η εκπαίδευσή του να προσεγγίζει από το σύμπτωμα στην κλινική διάγνωση του ασθενούς, η απόκτηση κλινικών δεξιοτήτων και συγχρόνως η συμπλήρωση των κενών των γνώσεών του. Επισημαίνεται ότι είναι πρωταρχικής σημασίας η κλινική εμπειρία σε πραγματικούς ασθενείς.
    <p></p>
    Όλοι οι συντελεστές εργάστηκαν στο καινοτόμο αυτό πρόγραμμα με υπευθυνότητα, συνέπεια, αποτελεσματικότητα, ζήλο και ενθουσιασμό.
    <p></p>
    Ευελπιστούμε το έργο να συνεχιστεί με το ίδιο ενδιαφέρον από όλα τα μέλη ΔΕΠ της Σχολής μας και να αποτελέσει πρωτοποριακή και πολύτιμη εκπαιδευτική μέθοδο.
    <p></p>
    Καλή σας περιήγηση
    <p></p>

    Ο Πρόεδρος της Ιατρικής Σχολής
        <br/>Βασίλειος Κ. Ταρλατζής
        <br/>Καθηγητής Μαιευτικής-Γυναικολογίας &
        <br/>Ανθρώπινης Αναπαραγωγής


</div>
<hr/>

    <table class="table table-striped table-bordered dataTable" id="my-labyrinths">
        <colgroup>
              <col style=" width: 85%"/>

            <col style="width: 15%"/>
        </colgroup>
        <thead>
        <tr>

            <th><?php echo __('Τίτλος'); ?></th>
            <th><?php echo __(''); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($templateData['maps'] as $map) {
            ?>
            <tr>

                <td>
                    <div class="span2"><img src="<?php echo URL::base(); ?>files/users/<?php echo $map->author->id;?>.jpg">
                    </div>
                    <div class="span8"> <a href="<?php echo URL::base(); ?>labyrinthManager/info/<?php echo $map->id; ?>"><?php echo $map->name; ?></a></div>


                </td>

                <td class="center">
                    <div class="btn-group">
                        <?php if (isset($templateData['rootNodeMap']) && isset($templateData['rootNodeMap'][$map->id]) && $templateData['rootNodeMap'][$map->id] != null) { ?>
                            <a class="btn btn-success"
                               href="<?php echo URL::base(); ?>renderLabyrinth/index/<?php echo $map->id; ?>">
                                <i class="icon-play icon-white"></i>
                                <span class="visible-desktop">Play</span>
                            </a>
                        <?php } else { ?>
                            <a class="btn btn-success show-root-error" href="javascript:void(0)">
                                <i class="icon-play icon-white"></i>
                                <span class="visible-desktop">Play</span>
                            </a>
                        <?php } ?>

                     </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>
<?php
} else {
    ?>
    <div class="alert alert-info">
        <p class="lead"><?php echo __('You do not appear to have any labyrinths authored at this time.'); ?></p>

        <p><?php echo __('Now is as good-a-time as any to click the Create Labyrinth button above.'); ?></p>
    </div>
<?php
}
?>
