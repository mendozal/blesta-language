<?php
/**
 * Admin Departments
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminDepartments.!success.department_created'] = 'Το τμήμα %1$s δημιουργήθηκε επιτυχώς.';
$lang['AdminDepartments.!success.department_updated'] = 'Το τμήμα %1$s ενημερώθηκε επιτυχώς.';
$lang['AdminDepartments.!success.department_deleted'] = 'Το τμήμα %1$s διαγράφηκε επιτυχώς.';
$lang['AdminDepartments.index.page_title'] = 'Διαχειριστής υποστήριξης > Τμήματα';
$lang['AdminDepartments.add.page_title'] = 'Διαχείριση υποστήριξης > Τμήματα > Προσθήκη τμήματος';
$lang['AdminDepartments.edit.page_title'] = 'Διαχείριση υποστήριξης > Τμήματα > Επεξεργασία τμήματος';
$lang['AdminDepartments.index.categorylink_adddepartment'] = 'Προσθήκη Τμήματος';
$lang['AdminDepartments.index.boxtitle_departments'] = 'Τμήματα';
$lang['AdminDepartments.index.heading_name'] = 'Όνομα';
$lang['AdminDepartments.index.heading_description'] = 'Περιγραφή';
$lang['AdminDepartments.index.heading_email'] = 'Ηλεκτρονικό ταχυδρομείο';
$lang['AdminDepartments.index.heading_assigned_staff'] = 'Εκχωρημένο προσωπικό';
$lang['AdminDepartments.index.heading_default_priority'] = 'Προεπιλεγμένη προτεραιότητα';
$lang['AdminDepartments.index.heading_options'] = 'Επιλογές';
$lang['AdminDepartments.index.option_edit'] = 'Επεξεργασία';
$lang['AdminDepartments.index.option_delete'] = 'Διαγραφή';
$lang['AdminDepartments.index.confirm_delete'] = 'Τμήματα στα οποία έχουν εκχωρηθεί εισιτήρια δεν μπορούν να διαγραφούν έως ότου όλα τα εισιτήρια εκ νέου εκχωρηθούν σε ένα άλλο τμήμα. Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το τμήμα;';
$lang['AdminDepartments.index.no_results'] = 'Δεν υπάρχουν τμήματα.';
$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = 'Εκχωρημένο προσωπικό';
$lang['AdminDepartments.assigned_staff.heading_staff'] = 'Προσωπικό';
$lang['AdminDepartments.assigned_staff.no_results'] = 'Το τμήμα αυτό δεν διαθέτει προσωπικό.';
$lang['AdminDepartments.!tooltip.piping_config'] = 'Ορίστε τη διαδρομή διοχέτευσης όπως φαίνεται, αλλά βεβαιωθείτε ότι χρησιμοποιείτε τη σωστή διαδρομή για την PHP στο διακομιστή σας. Βεβαιωθείτε ότι το pipe.php είναι εκτελέσιμο. Μπορεί επίσης να χρειαστεί να επεξεργαστείτε το pipe.php για να συμπεριλάβετε ένα hashbang στη γραμμή 1 που θα έμοιαζε κάπως έτσι: #!/usr/bin/php';
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = 'Όλα τα εισιτήρια με κατάσταση διαφορετική από %1$s, των οποίων η τελευταία απάντηση προέρχεται από μέλος του προσωπικού, θα κλείσουν αυτόματα εάν δεν έχει δοθεί καμία απάντηση εντός του επιλεγμένου χρονικού διαστήματος.';
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = 'Όλα τα εισιτήρια με κατάσταση %1$s θα διαγραφούν αυτόματα αφού παραμείνουν σε αυτή την κατάσταση για το επιλεγμένο χρονικό διάστημα.';
$lang['AdminDepartments.!tooltip.reminder_ticket_interval'] = 'Για όλα τα εισιτήρια με κατάσταση διαφορετική από %1$s, θα σταλεί μια υπενθύμιση στο άλλο μέρος εάν δεν έχει δοθεί απάντηση εντός του επιλεγμένου χρονικού διαστήματος.';
$lang['AdminDepartments.!tooltip.send_ticket_received'] = 'Η απενεργοποίηση αυτού του πλαισίου υποδεικνύει ότι τα νέα εισιτήρια που δημιουργούνται για αυτό το τμήμα (μέσω email ή πελάτη) δεν θα στέλνουν ειδοποίηση απάντησης στον πελάτη ή το προσωπικό μέσω του email Ticket Received ή του email Staff Ticket Updated, αντίστοιχα.';
$lang['AdminDepartments.!tooltip.automatic_transition'] = 'Αλλάζει την κατάσταση σε %1$s όταν ένα μέλος του προσωπικού απαντά.';
$lang['AdminDepartments.!tooltip.include_attachments'] = 'Οι διακομιστές αλληλογραφίας έχουν περιορισμούς όσον αφορά τα μεγέθη συνημμένων και τους τύπους αρχείων. Για να μειώσετε τον κίνδυνο απόρριψης του ηλεκτρονικού ταχυδρομείου, παρακαλούμε να συμπεριλάβετε τους περιορισμούς τύπου και μεγέθους συνημμένων αρχείων. Για να βεβαιωθείτε ότι ο πελάτης γνωρίζει τα συνημμένα που δεν συμπεριλήφθηκαν, χρησιμοποιήστε την ετικέτα {ticket.reply_has_attachments} στις ειδοποιήσεις των εισιτηρίων.';
$lang['AdminDepartments.!tooltip.attachment_types'] = 'Κατάλογος υποστηριζόμενων επεκτάσεων χωρισμένων με κόμμα (π.χ. zip,jpg,png).';
$lang['AdminDepartments.!tooltip.max_attachment_size'] = 'Μέγιστο μέγεθος του συνημμένου που πρέπει να συμπεριληφθεί σε MB.';
$lang['AdminDepartments.!tooltip.client_add'] = 'Εάν ο πελάτης μπορεί να υποβάλει το πεδίο, εάν είναι ψευδές, ο πελάτης θα μπορεί μόνο να διαβάσει το πεδίο.';
$lang['AdminDepartments.!tooltip.auto_delete'] = 'Εάν το εισιτήριο κλείσει, τα δεδομένα του πεδίου θα διαγραφούν αυτόματα. Τα δεδομένα δεν θα είναι πλέον ορατά στο προσωπικό.';
$lang['AdminDepartments.!text.add_response'] = 'Ορίστε μια προκαθορισμένη απόκριση αυτόματου κλεισίματος';
$lang['AdminDepartments.!text.no_selected_response'] = 'Δεν έχει επιλεγεί απόκριση αυτόματου κλεισίματος.';
$lang['AdminDepartments.!text.remove_response'] = 'Αφαιρέστε το';
$lang['AdminDepartments.add.boxtitle_adddepartment'] = 'Προσθήκη Τμήματος';
$lang['AdminDepartments.add.tab_general'] = 'Γενικά';
$lang['AdminDepartments.add.tab_custom_fields'] = 'Προσαρμοσμένα πεδία';
$lang['AdminDepartments.add.field_name'] = 'Όνομα';
$lang['AdminDepartments.add.field_description'] = 'Περιγραφή';
$lang['AdminDepartments.add.field_clients_only'] = 'Επιτρέψτε μόνο σε πελάτες να ανοίγουν ή να απαντούν σε εισιτήρια';
$lang['AdminDepartments.add.field_require_captcha'] = 'Απαίτηση ανθρώπινης επαλήθευσης για μη πιστοποιημένους χρήστες';
$lang['AdminDepartments.add.field_email'] = 'Ηλεκτρονικό ταχυδρομείο';
$lang['AdminDepartments.add.field_override_from_email'] = 'Αντικατάσταση της διεύθυνσης αποστολέα που έχει οριστεί στα πρότυπα email με τη διεύθυνση email που έχει οριστεί για αυτό το τμήμα';
$lang['AdminDepartments.add.field_send_ticket_received'] = 'Αποστολή μηνυμάτων ηλεκτρονικού ταχυδρομείου αυτόματης απάντησης για νέα εισιτήρια';
$lang['AdminDepartments.add.field_automatic_transition'] = 'Αυτόματη μετάβαση στην κατάσταση του εισιτηρίου στην απάντηση του διαχειριστή';
$lang['AdminDepartments.add.field_method'] = 'Χειρισμός ηλεκτρονικού ταχυδρομείου';
$lang['AdminDepartments.add.field_piping_config'] = 'Διαμόρφωση σωληνώσεων';
$lang['AdminDepartments.add.field_default_priority'] = 'Προεπιλεγμένη προτεραιότητα';
$lang['AdminDepartments.add.field_include_attachments'] = 'Συμπεριλάβετε υποστηριζόμενα συνημμένα στις ειδοποιήσεις εισιτηρίων';
$lang['AdminDepartments.add.field_attachment_types'] = 'Υποστηριζόμενοι τύποι συνημμένων';
$lang['AdminDepartments.add.field_max_attachment_size'] = 'Μέγιστο μέγεθος προσάρτησης';
$lang['AdminDepartments.add.field_security'] = 'Ασφάλεια';
$lang['AdminDepartments.add.field_box_name'] = 'Όνομα κουτιού';
$lang['AdminDepartments.add.field_mark_messages'] = 'Σημειώστε τα μηνύματα ως';
$lang['AdminDepartments.add.field_host'] = 'Υποδοχής';
$lang['AdminDepartments.add.field_user'] = 'Χρήστης';
$lang['AdminDepartments.add.field_pass'] = 'Πέρασμα';
$lang['AdminDepartments.add.field_port'] = 'Λιμάνι';
$lang['AdminDepartments.add.field_close_ticket_interval'] = 'Αυτόματο κλείσιμο εισιτηρίων';
$lang['AdminDepartments.add.field_delete_ticket_interval'] = 'Αυτόματη διαγραφή εισιτηρίων';
$lang['AdminDepartments.add.field_reminder_ticket_interval'] = 'Αυτόματη αποστολή υπενθυμίσεων εισιτηρίων';
$lang['AdminDepartments.add.field_reminder_ticket_status'] = 'Αποστολή υπενθυμίσεων σε εισιτήρια με κατάσταση';
$lang['AdminDepartments.add.field_reminder_ticket_priority'] = 'Αποστολή υπενθυμίσεων σε εισιτήρια με προτεραιότητα';
$lang['AdminDepartments.add.field_response_id'] = 'Αυτόματο κλείσιμο της απάντησης του εισιτηρίου';
$lang['AdminDepartments.add.field_status'] = 'Κατάσταση';
$lang['AdminDepartments.add.field_addsubmit'] = 'Προσθήκη Τμήματος';
$lang['AdminDepartments.add.field_add_field'] = 'Προσθήκη πεδίου';
$lang['AdminDepartments.add.heading_label'] = 'Ετικέτα';
$lang['AdminDepartments.add.heading_description'] = 'Περιγραφή';
$lang['AdminDepartments.add.heading_visibility'] = 'Ορατότητα';
$lang['AdminDepartments.add.heading_type'] = 'Τύπος';
$lang['AdminDepartments.add.heading_min'] = 'Min';
$lang['AdminDepartments.add.heading_max'] = 'Max';
$lang['AdminDepartments.add.heading_step'] = 'Βήμα';
$lang['AdminDepartments.add.heading_client_add'] = 'Ο πελάτης μπορεί να προσθέσει';
$lang['AdminDepartments.add.heading_encrypted'] = 'Κρυπτογραφημένο';
$lang['AdminDepartments.add.heading_auto_delete'] = 'Αυτόματη διαγραφή';
$lang['AdminDepartments.add.heading_options'] = 'Επιλογές';
$lang['AdminDepartments.add.heading_name'] = 'Όνομα';
$lang['AdminDepartments.add.heading_value'] = 'Αξία';
$lang['AdminDepartments.add.heading_default'] = 'Προεπιλογή';
$lang['AdminDepartments.add.text_delete'] = 'Διαγραφή';
$lang['AdminDepartments.add.text_add'] = 'Προσθέστε';
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = 'Επεξεργασία Τμήματος';
$lang['AdminDepartments.edit.tab_general'] = 'Γενικά';
$lang['AdminDepartments.edit.tab_custom_fields'] = 'Προσαρμοσμένα πεδία';
$lang['AdminDepartments.edit.field_name'] = 'Όνομα';
$lang['AdminDepartments.edit.field_description'] = 'Περιγραφή';
$lang['AdminDepartments.edit.field_clients_only'] = 'Επιτρέψτε μόνο σε πελάτες να ανοίγουν ή να απαντούν σε εισιτήρια';
$lang['AdminDepartments.edit.field_require_captcha'] = 'Απαίτηση ανθρώπινης επαλήθευσης για μη πιστοποιημένους χρήστες';
$lang['AdminDepartments.edit.field_email'] = 'Ηλεκτρονικό ταχυδρομείο';
$lang['AdminDepartments.edit.field_override_from_email'] = 'Αντικατάσταση της διεύθυνσης αποστολέα που έχει οριστεί στα πρότυπα email με τη διεύθυνση email που έχει οριστεί για αυτό το τμήμα';
$lang['AdminDepartments.edit.field_send_ticket_received'] = 'Αποστολή μηνυμάτων ηλεκτρονικού ταχυδρομείου αυτόματης απάντησης για νέα εισιτήρια';
$lang['AdminDepartments.edit.field_automatic_transition'] = 'Αυτόματη μετάβαση στην κατάσταση του εισιτηρίου στην απάντηση του διαχειριστή';
$lang['AdminDepartments.edit.field_method'] = 'Χειρισμός ηλεκτρονικού ταχυδρομείου';
$lang['AdminDepartments.edit.field_piping_config'] = 'Διαμόρφωση σωληνώσεων';
$lang['AdminDepartments.edit.field_default_priority'] = 'Προεπιλεγμένη προτεραιότητα';
$lang['AdminDepartments.edit.field_include_attachments'] = 'Συμπεριλάβετε υποστηριζόμενα συνημμένα στις ειδοποιήσεις εισιτηρίων';
$lang['AdminDepartments.edit.field_attachment_types'] = 'Υποστηριζόμενοι τύποι συνημμένων';
$lang['AdminDepartments.edit.field_max_attachment_size'] = 'Μέγιστο μέγεθος προσάρτησης';
$lang['AdminDepartments.edit.field_security'] = 'Ασφάλεια';
$lang['AdminDepartments.edit.field_box_name'] = 'Όνομα κουτιού';
$lang['AdminDepartments.edit.field_mark_messages'] = 'Σημειώστε τα μηνύματα ως';
$lang['AdminDepartments.edit.field_host'] = 'Υποδοχής';
$lang['AdminDepartments.edit.field_user'] = 'Χρήστης';
$lang['AdminDepartments.edit.field_pass'] = 'Πέρασμα';
$lang['AdminDepartments.edit.field_port'] = 'Λιμάνι';
$lang['AdminDepartments.edit.field_close_ticket_interval'] = 'Αυτόματο κλείσιμο εισιτηρίων';
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = 'Αυτόματη διαγραφή εισιτηρίων';
$lang['AdminDepartments.edit.field_reminder_ticket_interval'] = 'Αυτόματη αποστολή υπενθυμίσεων εισιτηρίων';
$lang['AdminDepartments.edit.field_reminder_ticket_status'] = 'Αποστολή υπενθυμίσεων σε εισιτήρια με κατάσταση';
$lang['AdminDepartments.edit.field_reminder_ticket_priority'] = 'Αποστολή υπενθυμίσεων σε εισιτήρια με προτεραιότητα';
$lang['AdminDepartments.edit.field_response_id'] = 'Αυτόματο κλείσιμο της απάντησης του εισιτηρίου';
$lang['AdminDepartments.edit.field_status'] = 'Κατάσταση';
$lang['AdminDepartments.edit.field_addsubmit'] = 'Επεξεργασία Τμήματος';
$lang['AdminDepartments.edit.field_add_field'] = 'Προσθήκη πεδίου';
$lang['AdminDepartments.edit.confirm_field_remove'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το προσαρμοσμένο πεδίο; Όλα τα δεδομένα που σχετίζονται με αυτό το πεδίο θα διαγραφούν. Αν θέλετε να αποκρύψετε αυτό το πεδίο και να διατηρήσετε τα δεδομένα, αλλάξτε την Ορατότητα σε Μόνο προσωπικό.';
$lang['AdminDepartments.edit.no_results'] = 'Δεν υπάρχουν προσαρμοσμένα πεδία σε αυτό το τμήμα.';
$lang['AdminDepartments.edit.heading_label'] = 'Ετικέτα';
$lang['AdminDepartments.edit.heading_description'] = 'Περιγραφή';
$lang['AdminDepartments.edit.heading_visibility'] = 'Ορατότητα';
$lang['AdminDepartments.edit.heading_type'] = 'Τύπος';
$lang['AdminDepartments.edit.heading_min'] = 'Min';
$lang['AdminDepartments.edit.heading_max'] = 'Max';
$lang['AdminDepartments.edit.heading_step'] = 'Βήμα';
$lang['AdminDepartments.edit.heading_client_add'] = 'Ο πελάτης μπορεί να προσθέσει';
$lang['AdminDepartments.edit.heading_encrypted'] = 'Κρυπτογραφημένο';
$lang['AdminDepartments.edit.heading_auto_delete'] = 'Αυτόματη διαγραφή';
$lang['AdminDepartments.edit.heading_options'] = 'Επιλογές';
$lang['AdminDepartments.edit.heading_name'] = 'Όνομα';
$lang['AdminDepartments.edit.heading_value'] = 'Αξία';
$lang['AdminDepartments.edit.heading_default'] = 'Προεπιλογή';
$lang['AdminDepartments.edit.text_delete'] = 'Διαγραφή';
$lang['AdminDepartments.edit.text_add'] = 'Προσθέστε';
$lang['AdminDepartments.edit.field_priorities'] = 'Διαθέσιμες προτεραιότητες';
$lang['AdminDepartments.add.field_priorities'] = 'Διαθέσιμες προτεραιότητες';

