<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'attach' => 'Attach',
        'detach' => 'Detach',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'categories' => [
        'name' => 'Categories',
        'index_title' => 'Categories List',
        'new_title' => 'New Categorie',
        'create_title' => 'Create Categorie',
        'edit_title' => 'Edit Categorie',
        'show_title' => 'Show Categorie',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'clients' => [
        'name' => 'Clients',
        'index_title' => 'Clients List',
        'new_title' => 'New Client',
        'create_title' => 'Create Client',
        'edit_title' => 'Edit Client',
        'show_title' => 'Show Client',
        'inputs' => [
            'prenom' => 'Prenom',
            'nom' => 'Nom',
            'mail' => 'Mail',
            'address' => 'Address',
            'telephone' => 'Telephone',
            'commande_id' => 'Commande',
        ],
    ],

    'commandes' => [
        'name' => 'Commandes',
        'index_title' => 'Commandes List',
        'new_title' => 'New Commande',
        'create_title' => 'Create Commande',
        'edit_title' => 'Edit Commande',
        'show_title' => 'Show Commande',
        'inputs' => [
            'mode_paiement' => 'Mode Paiement',
            'date_reglement' => 'Date Reglement',
            'produit_id' => 'Produit',
        ],
    ],

    'fournisseurs' => [
        'name' => 'Fournisseurs',
        'index_title' => 'Fournisseurs List',
        'new_title' => 'New Fournisseur',
        'create_title' => 'Create Fournisseur',
        'edit_title' => 'Edit Fournisseur',
        'show_title' => 'Show Fournisseur',
        'inputs' => [
            'prenom' => 'Prenom',
            'nom' => 'Nom',
            'telephone' => 'Telephone',
        ],
    ],

    'produits' => [
        'name' => 'Produits',
        'index_title' => 'Produits List',
        'new_title' => 'New Produit',
        'create_title' => 'Create Produit',
        'edit_title' => 'Edit Produit',
        'show_title' => 'Show Produit',
        'inputs' => [
            'nom' => 'Nom',
            'prix' => 'Prix',
            'poids' => 'Poids',
            'categorie_id' => 'Categorie',
        ],
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ],
    ],
];
