<?php
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/lib.php');

$bodyattrs = $OUTPUT->body_attributes();

echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo format_string($SITE->fullname); ?></title>
    <?php echo $OUTPUT->standard_head_html(); ?>
</head>
<body <?php echo $bodyattrs; ?>>
<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<div class="yanfaa-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold mb-3"><?php echo format_string($SITE->fullname); ?></h1>
                <p class="lead mb-4"><?php echo format_string($SITE->summary); ?></p>
                <a class="btn btn-primary btn-lg" href="<?php echo new moodle_url('/course/index.php'); ?>">Browse courses</a>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center">
                <img class="img-fluid" src="<?php echo $OUTPUT->image_url('hero', 'theme_yanfaa'); ?>" alt="">
            </div>
        </div>
    </div>
</div>

<main id="top-region" class="my-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5">Quality Courses</h3>
                        <p class="mb-0">Curated learning paths designed for real outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5">Expert Instructors</h3>
                        <p class="mb-0">Learn from practitioners with industry experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5">Flexible Learning</h3>
                        <p class="mb-0">Anytime, anywhere, on any device.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php echo $OUTPUT->standard_after_main_region_html(); ?>

<?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>
</html>


