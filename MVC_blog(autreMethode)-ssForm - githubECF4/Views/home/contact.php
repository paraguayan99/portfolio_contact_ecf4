<?php
$title = "Mon portfolio - Contact";
?>

<h2 class="mb-4">Contactez-nous</h2>

<!-- Inclusion du formulaire -->
<?php include '../Views/includes/contactForm.php'; ?>

<?php if (!empty($confirmation)): ?>
    <div class="alert mt-4 <?= str_starts_with($confirmation, 'Erreur') ? 'alert-danger' : 'alert-success' ?>">
        <?= $confirmation ?>
    </div>
<?php endif; ?>
