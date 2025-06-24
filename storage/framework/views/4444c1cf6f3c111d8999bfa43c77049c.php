<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="mb-4">Manajemen Pengumuman</h2>

    <a href="<?php echo e(route('admin.pengumuman.create')); ?>" class="btn btn-success mb-3">
        + Tambah Pengumuman
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-success">
                <tr class="text-center">
                    <th>No</th>
                    <th>Teks Pengumuman</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="text-center"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($item->isi); ?></td>
                        <td class="text-center">
                            <span class="badge bg-<?php echo e($item->status == 'aktif' ? 'success' : 'secondary'); ?>">
                                <?php echo e(ucfirst($item->status)); ?>

                            </span>
                        </td>
                        <td class="text-center">
                            
                            <form action="<?php echo e(route('admin.status_pengumuman.update', $item->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin mengaktifkan pengumuman ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <button class="btn btn-sm btn-primary mb-1">Aktif</button>
                            </form>

                            
                            <form action="<?php echo e(route('admin.status_pengumuman.disable', $item->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menonaktifkan pengumuman ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <button class="btn btn-sm btn-warning mb-1">Nonaktif</button>
                            </form>

                            
                            <form action="<?php echo e(route('admin.pengumuman.destroy', $item->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pengumuman ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger mb-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada pengumuman yang ditambahkan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/admin/pengumuman.blade.php ENDPATH**/ ?>