<?php $__env->startPush('styles'); ?>
    <style>
        .dashboard-box {
            transition: 0.3s;
        }

        .dashboard-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        table.table-hover tbody tr:hover {
            background-color: #11ce00;
        }

        .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Kartu Sambutan -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body bg-light rounded">
            <h5 class="mb-0 text-success fw-bold">
                <i class="bi bi-house-door-fill me-2"></i>
                SELAMAT DATANG | ADMIN MTs DARUL HIKMAH
            </h5>
        </div>
    </div>

    <div class="main-content mt-4">
        <h3 class="mb-4 fw-bold">Dashboard Admin</h3>

        <!-- Alert Peringatan -->
      <div class="alert alert-danger d-flex align-items-center py-2 px-3 small shadow-sm mb-3" role="alert" style="font-size: 0.85rem;">
    <i class="bi bi-exclamation-triangle-fill me-2 fs-6"></i>
    <div>
        <strong>Perhatian:</strong> Jika <b>selesai</b>, mohon segera <b>logout</b>.
    </div>
</div>


        <!-- Info Boxes -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-3 bg-gradient bg-success text-white">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-white text-success me-3">
                            <i class="bi bi-people-fill fs-3"></i>
                        </div>
                        <div>
                            <p class="mb-0">Total Pendaftar</p>
                            <h3><?php echo e($totalPendaftar); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-3 bg-gradient bg-warning text-white">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-white text-warning me-3">
                            <i class="bi bi-person-check-fill fs-3"></i>
                        </div>
                        <div>
                            <p class="mb-0">Sudah Diverifikasi</p>
                            <h3><?php echo e($sudahDiverifikasi); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-3 bg-gradient bg-danger text-white">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-white text-danger me-3">
                            <i class="bi bi-person-x-fill fs-3"></i>
                        </div>
                        <div>
                            <p class="mb-0">Belum Diverifikasi</p>
                            <h3><?php echo e($belumDiverifikasi); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div class="mb-5">
            <h5 class="fw-bold mb-3">Aktivitas Terbaru</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle shadow-sm bg-white">
                    <thead style="background-color: #198754;" class="text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $aktivitasTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->created_at->format('d M Y')); ?></td>
                                <td>
                                    <?php $status = strtolower($item->status_siswa); ?>
                                    <?php if($status == 'terima'): ?>
                                        <span class="badge bg-success px-3 py-2">
                                            <i class="bi bi-check-circle me-1"></i> Diterima
                                        </span>
                                    <?php elseif($status == 'tidak terima'): ?>
                                        <span class="badge bg-danger px-3 py-2">
                                            <i class="bi bi-x-circle me-1"></i> Tidak Diterima
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-warning text-dark px-3 py-2">
                                            <i class="bi bi-hourglass-split me-1"></i> Belum Diverifikasi
                                        </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted">Belum ada aktivitas terbaru.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>