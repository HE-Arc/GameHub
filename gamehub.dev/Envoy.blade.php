
@servers(['web' => '-A -p 2204 -l poweruser gamehub.srvz-webapp.he-arc.ch'])

# pull and migrate
@task('pull-migrate')
  cd www/GameHub
  git pull
  cd gamehub.dev
  php artisan migrate:fresh --seed
  echo "Deployment finished successfully!"
@endtask

# Run task
@macro('deploy')
	pull-migrate
@endmacro
