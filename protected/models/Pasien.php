<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id_pasien
 * @property string $nama_pasien
 * @property string $alamat
 * @property integer $tindakan_id
 * @property integer $obat_id
 * @property string $status_pembayaran
 * @property string $date
 *
 * The followings are the available model relations:
 * @property Tindakan $tindakan
 * @property Obat $obat
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_pasien, alamat, tindakan_id, obat_id, status_pembayaran, date', 'required'),
			array('tindakan_id, obat_id', 'numerical', 'integerOnly' => true),
			array('nama_pasien, alamat, status_pembayaran, date', 'length', 'max' => 100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pasien, nama_pasien, alamat, tindakan_id, obat_id, status_pembayaran, date', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tindakan' => array(self::BELONGS_TO, 'Tindakan', 'tindakan_id'),
			'obat' => array(self::BELONGS_TO, 'Obat', 'obat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pasien' => 'Id Pasien',
			'nama_pasien' => 'Nama Pasien',
			'alamat' => 'Alamat',
			'tindakan_id' => 'Tindakan',
			'obat_id' => 'Obat',
			'status_pembayaran' => 'Status Pembayaran',
			'date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id_pasien', $this->id_pasien);
		$criteria->compare('nama_pasien', $this->nama_pasien, true);
		$criteria->compare('alamat', $this->alamat, true);
		$criteria->compare('tindakan_id', $this->tindakan_id);
		$criteria->compare('obat_id', $this->obat_id);
		$criteria->compare('status_pembayaran', $this->status_pembayaran, true);
		$criteria->compare('date', $this->date, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}


	public static function ambilPasienSudahBayar()
	{
		return Yii::app()->db->createCommand()
			->select('*')
			->from('pasien')
			->where(array('like', 'status_pembayaran', '%sudah%'))
			->queryAll();
	}

	public static function ambilPasienBelumBayar()
	{
		return Yii::app()->db->createCommand()
			->select('*')
			->from('pasien')
			->where(array('like', 'status_pembayaran', '%belum%'))
			->queryAll();
	}
}
