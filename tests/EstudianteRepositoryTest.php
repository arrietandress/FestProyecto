<?php

use App\Models\Estudiante;
use App\Repositories\EstudianteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstudianteRepositoryTest extends TestCase
{
    use MakeEstudianteTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EstudianteRepository
     */
    protected $estudianteRepo;

    public function setUp()
    {
        parent::setUp();
        $this->estudianteRepo = App::make(EstudianteRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_estudiante()
    {
        $estudiante = $this->fakeEstudianteData();
        $createdEstudiante = $this->estudianteRepo->create($estudiante);
        $createdEstudiante = $createdEstudiante->toArray();
        $this->assertArrayHasKey('id', $createdEstudiante);
        $this->assertNotNull($createdEstudiante['id'], 'Created Estudiante must have id specified');
        $this->assertNotNull(Estudiante::find($createdEstudiante['id']), 'Estudiante with given id must be in DB');
        $this->assertModelData($estudiante, $createdEstudiante);
    }

    /**
     * @test read
     */
    function it_reads_estudiantes()
    {
        $estudiante = $this->makeEstudiante();
        $dbEstudiante = $this->estudianteRepo->find($estudiante->id);
        $dbEstudiante = $dbEstudiante->toArray();
        $this->assertModelData($estudiante->toArray(), $dbEstudiante);
    }

    /**
     * @test update
     */
    function it_updates_estudiante()
    {
        $estudiante = $this->makeEstudiante();
        $fakeEstudiante = $this->fakeEstudianteData();
        $updatedEstudiante = $this->estudianteRepo->update($fakeEstudiante, $estudiante->id);
        $this->assertModelData($fakeEstudiante, $updatedEstudiante->toArray());
        $dbEstudiante = $this->estudianteRepo->find($estudiante->id);
        $this->assertModelData($fakeEstudiante, $dbEstudiante->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_estudiante()
    {
        $estudiante = $this->makeEstudiante();
        $resp = $this->estudianteRepo->delete($estudiante->id);
        $this->assertTrue($resp);
        $this->assertNull(Estudiante::find($estudiante->id), 'Estudiante should not exist in DB');
    }
}