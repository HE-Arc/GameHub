@servers(['web' => '-A -p 2204 -l poweruser gamehub.srvz-webapp.he-arc.ch'])


# pull
@task('pull')
  cd www/GameHub/gamehub.dev
  git pull
@endtask

# migrate
@task('migrate')
  cd www/GameHub/gamehub.dev
  php artisan migrate --force
@endtask

# Just a done message :)
@task('done')
	echo "Deployment finished successfully!"
@endtask

# Run all tasks
@macro('deploy')
	pull
	done
@endmacro
