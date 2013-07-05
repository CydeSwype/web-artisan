<?php
$commands = array(
  'changes' => 'Display the framework change list',
  'clear-compiled' => 'Remove the compiled class file',
  'down' => 'Put the application into maintenance mode (NOTE! This will make web-artisan unavailable!)',
  'dump-autoload' => 'Regenerate framework autoload files',
  'help' => 'Displays help for a command',
  'list' => 'Lists commands',
  'migrate' => 'Run the database migrations',
  'optimize' => 'Optimize the framework for better performance',
  'routes' => 'List all registered routes',
  'serve' => 'Serve the application on the PHP development server',
  'tinker' => 'Interact with your application',
  'up' => 'Bring the application out of maintenance mode',
  'workbench' => 'Create a new package workbench',
  'asset:publish' => 'Publish a package\'s assets to the public directory',
  'auth:reminders' => 'Create a migration for the password reminders table',
  'cache:clear' => 'Flush the application cache',
  'command:make' => 'Create a new Artisan command',
  'config:publish' => 'Publish a package\'s configuration to the application',
  'controller:make' => 'Create a new resourceful controller',
  'db:seed' => 'Seed the database with records',
  'key:generate' => 'Set the application key',
  'migrate:install' => 'Create the migration repository',
  'migrate:make' => 'Create a new migration file',
  'migrate:refresh' => 'Reset and re-run all migrations',
  'migrate:reset' => 'Rollback all database migrations',
  'migrate:rollback' => 'Rollback the last database migration',
  'queue:listen' => 'Listen to a given queue',
  'queue:subscribe' => 'Subscribe a URL to an Iron.io push queue',
  'queue:work' => 'Process the next job on a queue',
  'session:table' => 'Create a migration for the session database table',        
);
?>

<h2>Available commands:</h2>

<?php foreach ($commands as $command => $description){ ?>
<dt><a href="<?php echo $_SERVER['REQUEST_URI'] . '/' . $command; ?>"><?php echo $command; ?></a></dt>
<dd><?php echo $description; ?> (get <a href="<?php echo $_SERVER['REQUEST_URI'] . '/help+' . $command; ?>">full help for this command</a>)</dd>
<?php } ?>
