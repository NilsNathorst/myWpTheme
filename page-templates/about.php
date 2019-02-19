<?php /* Template name: About */?>

<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">

      <?php if (have_posts()): ?>
          
          <?php while (have_posts()): the_post(); ?>
    
              <h1><?php the_title(); ?></h1>

              <?php the_content(); ?>

          <?php endwhile; ?>

      <?php endif; ?>

<?php $students = get_posts(['post_type' => 'student']); ?>
    </div class="row at-5">
        <div class="col">
            <h2 class="h5">Students</h2>
            <ul>
                <?php foreach ($students as $student): ?>
                    <li class="mb-2">
                    <?php echo $student->post_title; ?>
                    <?php $skills = get_the_terms($student, 'skill'); ?>
                    <?php foreach ($skills as $skill):?>
                    <?php echo $skill->name; ?>
                </li>
                <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
