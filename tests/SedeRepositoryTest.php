<?php

use App\Models\Sede;
use App\Repositories\SedeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SedeRepositoryTest extends TestCase
{
    use MakeSedeTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SedeRepository
     */
    protected $sedeRepo;

    public function setUp()
    {
        parent::setUp();
        $this->sedeRepo = App::make(SedeRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_sede()
    {
        $sede = $this->fakeSedeData();
        $createdSede = $this->sedeRepo->create($sede);
        $createdSede = $createdSede->toArray();
        $this->assertArrayHasKey('id', $createdSede);
        $this->assertNotNull($createdSede['id'], 'Created Sede must have id specified');
        $this->assertNotNull(Sede::find($createdSede['id']), 'Sede with given id must be in DB');
        $this->assertModelData($sede, $createdSede);
    }

    /**
     * @test read
     */
    function it_reads_sedes()
    {
        $sede = $this->makeSede();
        $dbSede = $this->sedeRepo->find($sede->id);
        $dbSede = $dbSede->toArray();
        $this->assertModelData($sede->toArray(), $dbSede);
    }

    /**
     * @test update
     */
    function it_updates_sede()
    {
        $sede = $this->makeSede();
        $fakeSede = $this->fakeSedeData();
        $updatedSede = $this->sedeRepo->update($fakeSede, $sede->id);
        $this->assertModelData($fakeSede, $updatedSede->toArray());
        $dbSede = $this->sedeRepo->find($sede->id);
        $this->assertModelData($fakeSede, $dbSede->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_sede()
    {
        $sede = $this->makeSede();
        $resp = $this->sedeRepo->delete($sede->id);
        $this->assertTrue($resp);
        $this->assertNull(Sede::find($sede->id), 'Sede should not exist in DB');
    }
}