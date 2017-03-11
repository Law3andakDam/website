class CreateCases < ActiveRecord::Migration[5.1]
  def change
    create_table :cases do |t|
      t.string :name
      t.string :email, null: false, default: ''
      t.string :telephone
      t.string :hospital
      t.references :blood_type, foreign_key: true

      t.timestamps
    end

    add_index :cases, :email
  end
end
